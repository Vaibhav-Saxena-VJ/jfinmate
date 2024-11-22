<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Activity;
use App\Models\UserRelation;
use App\Models\MlmUsers;
use App\Models\Category;


class MlmController extends Controller
{

    public function mlmView(){
        
        $data['categories_items'] = Category::all();
        $data['tree'] = Category::get()->toTree();

        $role_id = env('customerRole');
        $data['users'] = User::where('role_id', $role_id)->get();
        $data['childs'] = Category::descendantsOf(30);

        return view('admin.category', compact('data'));
     
    }    
    
 
}

   



    


