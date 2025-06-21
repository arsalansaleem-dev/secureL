<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\{LearnerProfile, UserLanguage};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class LearnerController extends Controller
{

    public function preferences()
    {
        $learner = auth('learner')->user();

        // Eager load preferences and user languages
        $learner->load(['preferences', 'languages']);

        $preferences = $learner->preferences;
        $languages = $learner->languages->pluck('language')->toArray();
        $profileImage = $learner->profile_image;

        return view('admin.learner.preferences', compact('preferences', 'languages', 'profileImage'));
    }

    public function updatePreferences(Request $request)
    {
        $learner = auth('learner')->user();

        $validated = $request->validate([
            'profile_image' => 'nullable|image|max:2048',
            'preferred_transmission' => 'nullable|in:Auto,Manual',
            'language' => 'nullable|array',
            'language.*' => 'string|max:255',
            'pickup_address' => 'nullable|string|max:255',
            'suburb' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:100',
            'note' => 'nullable|string|max:1000',
        ]);

        // Upload image to users table
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $learner->profile_image = $path;
            $learner->save();
        }

        // Handle checkbox notification settings
        $notificationSettings = [
            'notify_email' => $request->has('notify_email'),
            'notify_sms' => $request->has('notify_sms'),
        ];

        // Update preferences
        $learner->preferences()->updateOrCreate(
            ['user_id' => $learner->id],
            [
                'preferred_transmission' => $validated['preferred_transmission'] ?? null,
                'notification_settings' => json_encode($notificationSettings),
                'suburb' => $validated['suburb'] ?? null,
                'note' => $validated['note'] ?? null,
                'state' => $validated['state'] ?? null,
                'preferred_pickup_address' => $validated['pickup_address'] ?? null,
            ]
        );

        // Sync selected languages to the user_languages table
        if (isset($validated['language'])) {
            // If you're storing raw strings in user_languages
            // Remove old entries and insert new ones
            $learner->languages()->delete();
            foreach ($validated['language'] as $lang) {
                $learner->languages()->create(['language' => $lang]);
            }
        }

        return redirect()->back()->with('success', 'Preferences updated successfully!');
    }

    public function showPersonalDetails()
    {
        $user = auth()->user();
        $learnerProfile = $user->learnerProfile;

        return view('admin.learner.personal-details', compact('user', 'learnerProfile'));
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
            'dob' => ['nullable', 'date_format:d/m/Y'],
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

        if ($request->filled('new_password')) {
            $user->password = bcrypt($request->new_password);
        }

        $user->save();

        // Parse DOB safely
        $dob = null;
        if ($request->filled('dob')) {
            try {
                // $dob = Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d');
                $dob = $request->dob 
                        ? Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d')
                        : null;
            } catch (\Exception $e) {
                return back()->withErrors(['dob' => 'Invalid date format. Use dd/mm/yyyy.']);
            }
        }

        // Update or create learner profile with relationship
        LearnerProfile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'first_name' => $request->learner_first_name,
                'last_name' => $request->learner_last_name,
                'phone' => $request->learner_phone,
                'dob' => $dob,
                'relationship' => $request->account_relationship,
            ]
        );

        return redirect()->back()->with('success', 'Learner personal details saved successfully!');
    }

}
