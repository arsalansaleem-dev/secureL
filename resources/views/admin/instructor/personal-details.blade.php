@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('learner.personal.store') }}" class="col s12">
    @csrf
    @method('PUT')

      {{-- Validation Errors --}}
      @if ($errors->any())
        <div class="card-panel red lighten-2 white-text">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Instructor's Personal Details --}}
      <div class="col s12 m6">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Personal Details</h5>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" name="first_name" type="text" class="validate"
                       value="{{ old('first_name', $personalDetails->first_name ?? '') }}">
                <label for="first_name" class="{{ old('first_name', $personalDetails->first_name ?? '') ? 'active' : '' }}">First Name</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="preferred_name" name="preferred_name" type="text" class="validate"
                       value="{{ old('preferred_name', $personalDetails->preferred_name ?? '') }}">
                <label for="preferred_name" class="{{ old('preferred_name', $personalDetails->preferred_name ?? '') ? 'active' : '' }}">Preferred Name</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="last_name" name="last_name" type="text" class="validate"
                       value="{{ old('last_name', $personalDetails->last_name ?? '') }}">
                <label for="last_name" class="{{ old('last_name', $personalDetails->last_name ?? '') ? 'active' : '' }}">Last Name</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">wc</i>
                <select id="gender" name="gender" class="browser-default">
                  <option value="" disabled {{ old('gender', $personalDetails->gender ?? '') === null ? 'selected' : '' }}>Select Gender</option>
                  <option value="male" {{ old('gender', $personalDetails->gender ?? '') === 'male' ? 'selected' : '' }}>Male</option>
                  <option value="female" {{ old('gender', $personalDetails->gender ?? '') === 'female' ? 'selected' : '' }}>Female</option>
                  <option value="other" {{ old('gender', $personalDetails->gender ?? '') === 'other' ? 'selected' : '' }}>Other</option>
                </select>
                <label class="active">Gender</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="email" class="validate"
                       value="{{ old('email', $personalDetails->email ?? $instructor->user->email ?? '') }}">
                <label for="email" class="{{ old('email', $personalDetails->email ?? $instructor->user->email ?? '') ? 'active' : '' }}">Email</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input id="phone" name="phone" type="text" class="validate"
                       value="{{ old('phone', $personalDetails->phone ?? $instructor->user->phone ?? '') }}">
                <label for="phone" class="{{ old('phone', $personalDetails->phone ?? $instructor->user->phone ?? '') ? 'active' : '' }}">Phone Number</label>
              </div>

              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <input id="postcode" name="postcode" type="text" class="validate"
                       value="{{ old('postcode', $personalDetails->postcode ?? '') }}">
                <label for="postcode" class="{{ old('postcode', $personalDetails->postcode ?? '') ? 'active' : '' }}">Postcode</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Confirm Current Password --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">We need your current password to confirm your changes</h5>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="current_password" name="current_password" type="password" class="validate">
                <label for="current_password">Current Password</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Account Password --}}
      <div class="col">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Account Password</h5>
            <div class="row">
              <div class="col s12">
                <span>Leave this blank if you don't want to change your password</span>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="new_password" name="new_password" type="password" class="validate">
                <label for="new_password">New Password</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="new_password_confirmation" name="new_password_confirmation" type="password" class="validate">
                <label for="new_password_confirmation">New Password Confirmation</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Submit Button --}}
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12 right-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">
              Save Changes
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection
