<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

class InstructorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.instructor.instructor-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login with the 'instructor' guard
        if (Auth::guard('instructor')->attempt($credentials)) {
            $user = Auth::guard('instructor')->user();

            if ($user->role !== 'instructor') {
                Auth::guard('instructor')->logout();
                return back()->withErrors(['email' => 'Access denied for non-instructors.']);
            }

            return redirect('/instructor/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function showRegisterForm()
    {
        return view('auth.instructor.instructor-register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'instructor',
        ]);

        // Create the instructor profile entry
        Instructor::create([
            'user_id' => $user->id,
            'rating' => 0.0, // default values
            'license_type' => 'both', // default
            'is_available' => 1,
            'is_verified' => 0,
        ]);

        Auth::guard('instructor')->login($user);
        return redirect('/instructor/dashboard');
    }
}
