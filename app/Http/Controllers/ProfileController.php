<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function showProfile()
{
    $userId = session('user_id'); // Ensure session ID is correctly retrieved

    if ($userId) {
        // Fetch user information
        $user = DB::table('users')->where('id', $userId)->first();
        // Fetch additional profile information
        $profile = DB::table('profile')->where('user_id', $userId)->first();

        if ($user && $profile) {
            // Pass both user and profile data to the view
            return view('admin.profile', compact('user', 'profile'));
        } else {
            // Redirect back with an error message if either user or profile data is missing
            return redirect('/')->with('error', 'User or profile information not found.');
        }
    } else {
        // Redirect back with an error message if the session is missing the user ID
        return redirect('/')->with('error', 'No user ID in session.');
    }
}


    /**
     * Display the profile edit form.
     */
    public function editProfile()
    {
        $userId = session('user_id');

        if ($userId) {
            $user = DB::table('users')->where('id', $userId)->first();
            $profile = DB::table('profile')->where('user_id', $userId)->first();

            if ($user && $profile) {
                return view('admin.profile-edit', compact('user', 'profile'));
            } else {
                return redirect('/')->with('error', 'User or profile information not found.');
            }
        } else {
            return redirect('/')->with('error', 'No user ID in session.');
        }
    }

    /**
     * Update the profile information.
     */
    public function updateProfile(Request $request)
    {
        $userId = session()->get('user_id');
        if ($userId) {
            // Validate the input
            $request->validate([
                'name' => 'string|max:255',
                'email_id' => 'string|email|max:255',
                'dob' => 'date',
                'mobile_no' => 'string|max:20',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'gender' => 'string|max:255',
            ]);

        // Update user information
        DB::table('users')->where('id', $userId)->update([
            'name' => $request->input('name'),
            'email_id' => $request->input('email_id'),
        ]);

            // Prepare update data for profile
            $profileData = [
                'dob' => $request->input('dob'),
                'mobile_no' => $request->input('mobile_no'),
                'gender' => $request->input('gender'),
            ];

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $existingProfile = DB::table('profile')->where('user_id', $userId)->first();
            
            // Delete old avatar if exists
            if ($existingProfile && $existingProfile->avatar) {
                Storage::delete('public/avatars/' . $existingProfile->avatar);
            }

            // Store new avatar
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $profileData['avatar'] = basename($avatarPath);
        }

        // Update profile information
        $updateProfile = DB::table('profile')->where('user_id', $userId)->update($profileData);

        if ($updateProfile !== false) {
            return redirect()->route('admin.profile')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('admin.profile')->with('error', 'Failed to update profile.');
        }
    } else {
        return redirect()->route('login')->with('error', 'You need to login first.');
    }
}
}
