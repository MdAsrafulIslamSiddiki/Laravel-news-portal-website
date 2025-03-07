<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{
    use AuthenticatesUsers;
    use UploadMedia;
    
    function index() {
        $news = News::all();
        $totalViews = News::sum('views');
        // dd($totalViews);
        return view('backend.dashboard', compact('news', 'totalViews'));
    }

    function admin_profile() {
        return view('backend.adminProfile');
    }

    function update_admin_profile(Request $request) {
        
        $validated = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $user = User::find(Auth::id());
        // dd($user);

        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image && file_exists(public_path('storage/' . $user->profile_image))) {
                unlink(public_path('storage/' . $user->profile_image));
            }

            $admin_image = $this->uploadSingleMedia($request->profile_image, str($request->name)->slug(), 'admin_images');
            $user->profile_image = $admin_image;
        }

        $user->save();

        notify()->success('Profile updated successfully!', 'Success');
        return response()->json(['success' => 'Profile updated successfully!']);
    }
    function change_password(Request $request) {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8|same:new_password',
        ]);
    
        $user = User::find(Auth::id());
    
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['errors' => ['current_password' => ['Current password is incorrect.']]], 422);
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
        
        notify()->success('Profile updated successfully!', 'Success');
        return response()->json(['success' => 'Password changed successfully']);
        

        
    }
}
