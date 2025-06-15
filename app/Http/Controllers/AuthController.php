<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Facades\Seo;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect admin users to admin dashboard
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Show register form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create user with basic info
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bio' => $request->bio,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
        ];

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
    $image = $request->file('profile_picture');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    // Store the file
    $path = $image->storeAs('profile_pictures', $imageName, 'public');
    
    // Save relative path to database or array
    $userData['profile_picture'] = $path;
}


        $user = User::create($userData);

        Auth::login($user);

        return redirect('dashboard');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Show dashboard
    public function dashboard()
    {
        $user = Auth::user();
        $posts = $user->posts()->latest()->take(5)->get();
        $totalPosts = $user->posts()->count();
        $publishedPosts = $user->publishedPosts()->count();
        $draftPosts = $user->draftPosts()->count();

        return view('dashboard', compact('user', 'posts', 'totalPosts', 'publishedPosts', 'draftPosts'));
    }

    // Show change password form
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    // Handle change password
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Password changed successfully!');
    }
}