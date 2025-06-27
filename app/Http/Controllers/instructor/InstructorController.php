<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\{User, Instructor, InstructorPersonalDetail};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class InstructorController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role !== 'instructor') {
                Auth::logout();
                return back()->withErrors(['email' => 'You are not authorized as an instructor.']);
            }

            $request->session()->regenerate();
            return redirect('/instructor/dashboard');

            return redirect()->intended(route('instructor.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }


    public function registerInstructor(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'description_type'    => 'required|string',
            'name'                => 'required|string|max:255',
            'email'               => 'required|email|unique:users,email',
            'postcode'            => 'required|string|max:10',
            'message'             => 'required|string',
            'password'            => 'required|string|confirmed|min:8',
        ]);

        DB::beginTransaction();
        try {
            // 1. Create User
            $user = User::create([
                'name'      => $validated['name'],
                'email'     => $validated['email'],
                'password'  => Hash::make($validated['password']),
                'role'      => 'instructor',
            ]);

            // 2. Create Instructor
            $instructor = Instructor::create([
                'user_id'           => $user->id,
                'license_type'      => $validated['transmission_type'],
                'description_type'      => $validated['description_type'],
                'subject'      => $validated['subject'],
                'message'      => $validated['message'],
                'is_verified'       => 0,
                'is_available'      => 0, // default not available yet
                'rating'            => 0.0,
                'language_preference' => null,
                'bio'               => null,
            ]);

            // 3. Store Personal Details
            InstructorPersonalDetail::create([
                'instructor_id' => $instructor->id,
                'first_name'    => $validated['name'],
                'last_name'     => '', // You can split name if needed
                'postcode'      => $validated['postcode'],
                'gender'        => null,
                'email'         => $validated['email'],
            ]);

            DB::commit();

            return redirect('/instructor/dashboard');

            return redirect()->route('instructor.login')
                             ->with('success', 'Your request has been submitted successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }

    }

    public function showPersonalDetails()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.personal-details', compact('user', 'learnerProfile'));
    }

    public function showProfileVehicle()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.profile-vehicle', compact('user', 'learnerProfile'));
    }

    public function showAvailability()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.availability', compact('user', 'learnerProfile'));
    }

    public function showPricing()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.pricing', compact('user', 'learnerProfile'));
    }

    public function showVerifications()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.verifications', compact('user', 'learnerProfile'));
    }

    public function showBanking()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.instructor.banking', compact('user', 'learnerProfile'));
    }
}
