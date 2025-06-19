@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card z-depth-2">
    <div class="card-content">
      <h5 class="center-align">My Preferences</h5>

      <form method="POST" enctype="multipart/form-data" action="{{ route('learner.preferences.update') }}">
        @csrf
        @method('PUT')

        @php
          $prefs = $preferences ?? null;
        @endphp

       {{-- Profile Image --}}
        <div class="row center-align">
          <img src="{{ $profileImage ? asset('storage/' . $profileImage) : asset('assets/img/default-avatar.jpg') }}"
               alt="Profile" class="circle responsive-img" style="width: 120px; height: 120px;">
        </div>

        <div class="row center-align">
          <div class="file-field input-field">
            <div class="btn grey lighten-1 black-text">
              <span>Choose File</span>
              <input type="file" name="profile_image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload your profile image">
            </div>
            <span class="grey-text text-darken-1">Must be at least 128px by 128px</span>
          </div>
        </div>

        {{-- Transmission + Language --}}
        <div class="row">
          <div class="input-field col s6">
            <select name="preferred_transmission">
              <option value="" disabled selected>Choose your option</option>
              <option value="Auto" {{ $preferences && $preferences->preferred_transmission == 'auto' ? 'selected' : '' }}>Auto</option>
              <option value="Manual" {{ $preferences && $preferences->preferred_transmission == 'manual' ? 'selected' : '' }}>Manual</option>
            </select>
            <label>Preferred transmission</label>
          </div>

          <div class="input-field col s6">
            @php
              $selectedLanguages = $languages ?? [];
            @endphp
            <select name="language[]" id="language" multiple>
              <option value="English" {{ in_array('English', $selectedLanguages) ? 'selected' : '' }}>English</option>
              <option value="Urdu" {{ in_array('Urdu', $selectedLanguages) ? 'selected' : '' }}>Urdu</option>
              <option value="Arabic" {{ in_array('Arabic', $selectedLanguages) ? 'selected' : '' }}>Arabic</option>
              <option value="Punjabi" {{ in_array('Punjabi', $selectedLanguages) ? 'selected' : '' }}>Punjabi</option>
            </select>
            <label for="language">Languages spoken</label>
          </div>
        </div>

        {{-- Pickup Address --}}
        <div class="row">
          <div class="input-field col s12">
            <input id="pickup_address" name="pickup_address" type="text" class="validate"
                   value="{{ $prefs->preferred_pickup_address ?? '' }}">
            <label for="pickup_address">Preferred pickup address</label>
            <span class="helper-text">This will be the default for new bookings. You can edit it in the dashboard too.</span>
          </div>
        </div>

        {{-- Suburb + State --}}
        <div class="row">
          <div class="input-field col s6">
            <input id="suburb" name="suburb" type="text" class="validate"
                   value="{{ $prefs->suburb ?? '' }}">
            <label for="suburb">Suburb</label>
          </div>

          <div class="input-field col s6">
            <select name="state">
              <option value="" disabled selected>Choose State</option>
              <option value="Victoria" {{ $prefs && $prefs->state == 'Victoria' ? 'selected' : '' }}>Victoria</option>
              <option value="NSW" {{ $prefs && $prefs->state == 'NSW' ? 'selected' : '' }}>New South Wales</option>
            </select>
            <label>State</label>
          </div>
        </div>

        {{-- Instructor Note --}}
        <div class="row">
          <div class="input-field col s12">
            <textarea id="note" name="note" class="materialize-textarea"
                      placeholder="e.g. 'Ring door bell' or 'lane access'">{{ $prefs->note ?? '' }}</textarea>
            <label for="note">Add a note for your instructor (optional)</label>
          </div>
        </div>

        {{-- Notification Checkboxes --}}
        @php
        $notifications = $prefs && $prefs->notification_settings
            ? json_decode($prefs->notification_settings, true)
            : ['notify_email' => false, 'notify_sms' => false];
        @endphp
        <div class="row">
          <div class="col s12">
            <h6>Notification Preferences</h6>
            <label>
              <input type="checkbox" name="notify_email" class="filled-in"
                 {{ $notifications['notify_email'] ? 'checked' : '' }}/>
              <span>Email - Marketing Communications and special offers</span>
            </label>
            <br>
            <label>
              <input type="checkbox" name="notify_sms" class="filled-in"
              {{ $notifications['notify_sms'] ? 'checked' : '' }}/>
              <span>SMS - Marketing Communications and special offers</span>
            </label>
          </div>
        </div>

        {{-- Submit --}}
        <div class="row center-align">
          <button type="submit" class="btn yellow darken-2 black-text waves-effect waves-light">
            Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
