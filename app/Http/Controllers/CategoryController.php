<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $parentId = $request->parent;
     
         if ($parentId) {
             $parent = Category::find($parentId);
     
             if ($parent && $parent->children()->count() >= 2) {
                 return response()->json(['status' => 1, 'msg' => 'A binary tree node cannot have more than two children.']);
             }
         }
     
         $category = new Category;
         $category->name = $request->category;
     
         if ($parentId) {
             $parent->appendNode($category);
         } else {
             $category->saveAsRoot();
         }
     
         return response()->json(['status' => 1, 'msg' => 'Node added successfully']);
     }

     public function addNode($parentId, $data)
     {
         $parentNode = Category::find($parentId);
     
         if (!$parentNode) {
             return response()->json(['error' => 'Parent category not found'], 404);
         }
     
         $newNode = new Category;
         $newNode->name = $data;
     
         if ($parentNode->children()->count() < 2) {
             $parentNode->appendNode($newNode);
         } else {
             $this->addNodeToNextAvailable($parentNode, $newNode);
         }
     
         return response()->json(['message' => 'Node added successfully'], 200);
     }
    
    // Recursive function to find the next available position for the new node
    public function addNodeToNextAvailable($node, $newNode)
{
    $leftChild = $node->children()->first();
    $rightChild = $node->children()->skip(1)->first();

    if (is_null($leftChild)) {
        $node->appendNode($newNode);
    } elseif (is_null($rightChild)) {
        $node->appendNode($newNode);
    } else {
        $this->addNodeToNextAvailable($leftChild, $newNode);
    }
}
public function commissionDistribution($parentName, $amount)
{
    \Log::info("Starting commission distribution for Parent Name: $parentName, Amount: $amount");

    // Find the category by name
    $category = Category::where('name', $parentName)->first();
    if (!$category) {
        \Log::warning("Category not found for Parent Name: $parentName. Skipping commission distribution.");
        return;
    }

    $parentId = $category->id;
    \Log::info("Found category: {$category->name}, Parent ID: {$parentId}");

    // Fetch ancestors
    $ancestors = Category::ancestorsOf($parentId);
    if ($ancestors->isEmpty()) {
        if ($category->isRoot()) {
            \Log::info("Parent Name: $parentName is a root node. Distributing commission directly.");

            $commissionRecord = DB::table('commission')->latest('com_id')->first();
            if (!$commissionRecord) {
                \Log::error("No commission record found.");
                return;
            }

            $commissionPercentage = (float) $commissionRecord->commission_amount;
            $commission = $amount * $commissionPercentage / 100;

            // Log commission and wallet details
            $wallet = Wallet::firstOrCreate(['user_id' => $category->id], ['wallet_balance' => 0]);
            $wallet->increment('wallet_balance', $commission);

            \Log::info("Root-level commission distributed to User ID: {$category->id}, Amount: {$commission}");
            return;
        }

        \Log::warning("No ancestors or valid tree structure found for Parent Name: $parentName.");
        return;
    }

    // Get commission details
    $commissionRecord = DB::table('commission')->latest('com_id')->first();
    if (!$commissionRecord) {
        \Log::error("No commission record found.");
        return;
    }

    $commissionPercentage = (float) $commissionRecord->commission_amount;
    \Log::info("Commission Percentage: {$commissionPercentage}%");

    $totalCommission = $amount * $commissionPercentage / 100;

    // Split commission equally among ancestors
    $share = $totalCommission / $ancestors->count();
    \Log::info("Total commission to distribute: {$totalCommission}, Share per ancestor: {$share}");

    foreach ($ancestors as $ancestor) {
        // Skip ancestors with invalid ID
        if (!$ancestor->id) {
            \Log::warning("Skipping ancestor with invalid ID: $ancestor->name");
            continue;
        }

        // Log ancestor info
        \Log::info("Distributing commission to Ancestor ID: {$ancestor->id}, Name: {$ancestor->name}");

        // First or create the wallet for ancestor
        $wallet = Wallet::firstOrCreate(['user_id' => $ancestor->id], ['wallet_balance' => 0]);
        $wallet->increment('wallet_balance', $share);

        \Log::info("Distributed {$share} commission to User ID: {$ancestor->id}");
    }

    \Log::info("Commission distribution completed for Parent Name: $parentName");
}
}
