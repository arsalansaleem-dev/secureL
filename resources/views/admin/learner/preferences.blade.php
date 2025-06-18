@extends('layouts.app') {{-- Or your layout file --}}

@section('title', 'Learner Preferences')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Your Preferences</h2>

    <form action="{{ route('learner.preferences.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- Language Preference --}}
            <div class="col-md-6 mb-3">
                <label for="language" class="form-label">Preferred Language</label>
                <select id="language" name="language" class="form-select">
                    <option value="english" {{ old('language', $preferences->language ?? '') == 'english' ? 'selected' : '' }}>English</option>
                    <option value="urdu" {{ old('language', $preferences->language ?? '') == 'urdu' ? 'selected' : '' }}>Urdu</option>
                </select>
            </div>

            {{-- Training Time Preference --}}
            <div class="col-md-6 mb-3">
                <label for="training_time" class="form-label">Preferred Training Time</label>
                <select id="training_time" name="training_time" class="form-select">
                    <option value="morning" {{ old('training_time', $preferences->training_time ?? '') == 'morning' ? 'selected' : '' }}>Morning</option>
                    <option value="evening" {{ old('training_time', $preferences->training_time ?? '') == 'evening' ? 'selected' : '' }}>Evening</option>
                    <option value="weekend" {{ old('training_time', $preferences->training_time ?? '') == 'weekend' ? 'selected' : '' }}>Weekend</option>
                </select>
            </div>

            {{-- Transmission Type --}}
            <div class="col-md-6 mb-3">
                <label for="transmission" class="form-label">Transmission Type</label>
                <select id="transmission" name="transmission" class="form-select">
                    <option value="automatic" {{ old('transmission', $preferences->transmission ?? '') == 'automatic' ? 'selected' : '' }}>Automatic</option>
                    <option value="manual" {{ old('transmission', $preferences->transmission ?? '') == 'manual' ? 'selected' : '' }}>Manual</option>
                </select>
            </div>

            {{-- Gender Preference for Trainer --}}
            <div class="col-md-6 mb-3">
                <label for="trainer_gender" class="form-label">Trainer Gender Preference</label>
                <select id="trainer_gender" name="trainer_gender" class="form-select">
                    <option value="any" {{ old('trainer_gender', $preferences->trainer_gender ?? '') == 'any' ? 'selected' : '' }}>Any</option>
                    <option value="male" {{ old('trainer_gender', $preferences->trainer_gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('trainer_gender', $preferences->trainer_gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Save Preferences</button>
        </div>
    </form>
</div>
@endsection
