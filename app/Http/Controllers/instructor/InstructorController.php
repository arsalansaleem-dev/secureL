<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class InstructorController extends Controller
{

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

        // Create instructor user
        $user = User::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'password'  => Hash::make($validated['password']),
            'user_type' => 'instructor', // assuming you use user_type for role
            'extra'     => json_encode([
                'description_type'   => $validated['description_type'],
                'transmission_type'  => $validated['transmission_type'],
                'postcode'           => $validated['postcode'],
                'subject'            => $validated['subject'],
                'message'            => $validated['message'],
            ]),
        ]);

        // Optional: log in the instructor
        // Auth::login($user);

        return redirect()->route('instructor.login')->with('success', 'Your request has been submitted successfully.');
    }
}
