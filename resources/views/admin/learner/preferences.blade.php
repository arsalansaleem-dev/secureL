@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card z-depth-2">
    <div class="card-content">
      <h5 class="center-align">My Preferences</h5>

      <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row center-align">
            <img src="{{ asset('assets/img/default-avatar.jpg') }}" alt="Profile" class="circle responsive-img" style="width: 120px; height: 120px;">
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
          <div class="input-field col s6">
            <select name="preferred_transmission">
              <option value="" disabled selected>Choose your option</option>
              <option value="Auto">Auto</option>
              <option value="Manual">Manual</option>
            </select>
            <label>Preferred transmission</label>
          </div>

          <div class="input-field col s6">
            <input id="language" name="language" type="text" class="validate" value="English">
            <label for="language">Language spoken</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="pickup_address" name="pickup_address" type="text" class="validate" value="4A Shahrah-e-Faisal Rd, PECHS...">
            <label for="pickup_address">Preferred pickup address</label>
            <span class="helper-text">This will be the default for new bookings. You can edit it in the dashboard too.</span>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="suburb" name="suburb" type="text" class="validate" value="Melbourne, 3004">
            <label for="suburb">Suburb</label>
          </div>

          <div class="input-field col s6">
            <select name="state">
              <option value="" disabled selected>Choose State</option>
              <option value="Victoria" selected>Victoria</option>
              <option value="NSW">New South Wales</option>
            </select>
            <label>State</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="note" name="note" class="materialize-textarea" placeholder="e.g. 'Ring door bell' or 'lane access'"></textarea>
            <label for="note">Add a note for your instructor (optional)</label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h6>Notification Preferences</h6>
            <label>
              <input type="checkbox" name="notify_email" class="filled-in" checked />
              <span>Email - Marketing Communications and special offers</span>
            </label>
            <br>
            <label>
              <input type="checkbox" name="notify_sms" class="filled-in" />
              <span>SMS - Marketing Communications and special offers</span>
            </label>
          </div>
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


