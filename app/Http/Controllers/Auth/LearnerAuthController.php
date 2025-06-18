<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class LearnerAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.learner.learner-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login with the 'learner' guard
        if (Auth::guard('learner')->attempt($credentials)) {
            $user = Auth::guard('learner')->user();

            // Optional role check if multiple roles use the same guard
            if ($user->role !== 'learner') {
                Auth::guard('learner')->logout();
                return back()->withErrors(['email' => 'Access denied for non-learners.']);
            }
            return redirect('/learner/dashboard');

            return redirect()->intended(route('learner.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }


    public function showRegisterForm()
    {
        return view('auth.learner.learner-register');
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
            'role' => 'learner',
        ]);

        Auth::login($user);
        return redirect()->route('admin.dashboard');
    }
}
