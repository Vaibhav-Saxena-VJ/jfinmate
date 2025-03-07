<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinyMCEController extends Controller
{
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $path = $image->store('uploads', 'public'); // Store in `storage/app/public/uploads`

            // Return a clean relative URL
            return response()->json(['location' => asset('storage/' . $path)]);
        }

        return response()->json(['error' => 'Image upload failed'], 400);
    }

}
