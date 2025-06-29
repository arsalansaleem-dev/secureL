@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card z-depth-2">
    <div class="card-content">
      <h5 class="center-align">My Profile & Vehicle Details</h5>

      <form method="POST" enctype="multipart/form-data" action="{{ route('learner.preferences.update') }}">
        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="card-panel red lighten-2 white-text">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {{-- Profile Section --}}
        <div class="row center-align">
          <img src="{{ asset('assets/img/default-avatar.jpg') }}"
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

        <div class="row">
          <div class="input-field col s12">
            <textarea id="bio" name="bio" class="materialize-textarea" maxlength="1600"></textarea>
            <label for="bio">Your Instructor Bio</label>
            <span class="helper-text right-align">Max 1600 characters</span>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="languages">
            <label for="languages">Enter any languages you speak fluently</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <select name="driving_association_member">
              <option value="Yes">Yes</option>
              <option value="No" selected>No</option>
            </select>
            <label>Member of a driving instructor association?</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <select name="start_month">
              @foreach(['January','February','March','April','May','June','July','August','September','October','November','December'] as $month)
                <option value="{{ $month }}">{{ $month }}</option>
              @endforeach
            </select>
            <label>Start Month</label>
          </div>

          <div class="input-field col s6">
            <select name="start_year">
              @for ($year = date('Y'); $year >= 1980; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
              @endfor
            </select>
            <label>Start Year</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <label>Which transmission(s) do you offer?</label><br><br>
            <label><input type="checkbox" name="transmission_auto"> <span>Auto</span></label>
            <label><input type="checkbox" name="transmission_manual"> <span>Manual</span></label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <label>What service(s) do you offer?</label><br><br>
            <label><input type="checkbox" name="existing_customers"> <span>Driving test repackage - existing customers</span></label><br>
            <label><input type="checkbox" name="new_customers"> <span>Driving test package - new customers</span></label><br>
            <label><input type="checkbox" name="coordinator"> <span>Manual instructor coordinator - no vehicle</span></label>
          </div>
        </div>

        {{-- Vehicle Details --}}
<div class="divider"></div>
<h6 class="mt-4">Vehicle Details</h6>

<div class="row">
  <div class="input-field col s6">
    <input type="text" name="transmission">
    <label for="transmission">Transmission</label>
  </div>
  <div class="input-field col s6">
    <input type="text" name="vehicle_registration_number">
    <label for="vehicle_registration_number">Vehicle Registration Number</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s6">
    <input type="text" name="vehicle_make">
    <label for="vehicle_make">Make</label>
  </div>
  <div class="input-field col s6">
    <input type="text" name="vehicle_model">
    <label for="vehicle_model">Model</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">
    <input type="text" name="vehicle_country">
    <label for="vehicle_country">Country</label>
  </div>
  <div class="input-field col s4">
    <input type="text" name="vehicle_year">
    <label for="vehicle_year">Year</label>
  </div>
  <div class="input-field col s4">
    <input type="text" name="vehicle_safety_rating">
    <label for="vehicle_safety_rating">ANCAP Safety Rating</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <select name="dual_controls">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    <label>Do you instruct with dual controls?</label>
  </div>
</div>

{{-- Notification Preferences --}}
<div class="divider"></div>
<h6 class="mt-4">Notification Preferences</h6>

<div class="row">
  <p>
    <label>
      <input type="checkbox" name="notify_email" />
      <span>Email</span>
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="notify_sms" />
      <span>SMS</span>
    </label>
  </p>
</div>

{{-- Marketing & Marketplace --}}
<div class="divider"></div>
<h6 class="mt-4">Marketing Preferences</h6>

<div class="row">
  <p>
    <label>
      <input type="checkbox" name="marketing_communications" />
      <span>Marketing Communications and special offers</span>
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="exclude_marketplace" />
      <span>Exclude me from instructor marketplace search results</span>
    </label>
  </p>
</div>

        
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
