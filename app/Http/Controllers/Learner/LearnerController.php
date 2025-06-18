<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;

class LearnerController extends Controller
{
    public function preferences()
    {
        return view('admin.learner.preferences');
    }


    public function updatePreferences(Request $request)
    {
        // Validate and save preferences here
        $request->validate([
            'language' => 'nullable|string|max:100',
        ]);

        $learner = auth('learner')->user();
        $learner->preferred_language = $request->input('language');
        $learner->save();

        return redirect()->route('learner.preferences')->with('success', 'Preferences updated!');
    }

    public function showPersonalDetails()
    {
        return view('admin.learner.personal-details');
    }

    public function updatePersonalDetails(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:learners,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $user->update($request->only('name', 'email', 'phone'));

        return redirect()->route('learner.personal.details')->with('success', 'Details updated successfully!');
    }


}
