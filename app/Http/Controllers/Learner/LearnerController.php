<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\LearnerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

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


    public function storePersonalDetails(Request $request)
    {
        $request->validate([
            'account_first_name' => 'required|string|max:191',
            'account_last_name' => 'nullable|string|max:191',
            'account_phone' => 'nullable|string|max:20',
            'account_email' => 'required|email|max:191',
            'account_relationship' => 'nullable|string|max:191',

            'learner_first_name' => 'nullable|string|max:191',
            'learner_last_name' => 'nullable|string|max:191',
            'learner_phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',

            'current_password' => 'required',
            'new_password' => 'nullable|confirmed|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update user info
        $user->name = $request->account_first_name . ' ' . $request->account_last_name;
        $user->phone = $request->account_phone;
        $user->email = $request->account_email;

        $dob = Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d');

        if ($request->filled('new_password')) {
            $user->password = bcrypt($request->new_password);
        }

        $user->save();

        // Update or create learner profile
        LearnerProfile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'first_name' => $request->learner_first_name,
                'last_name' => $request->learner_last_name,
                'phone' => $request->learner_phone,
                'dob' => $dob,
            ]
        );

        return redirect()->back()->with('success', 'Learner personal details saved successfully!');
    }




}
