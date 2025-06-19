@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('learner.personal.store') }}" class="col s12">
    @csrf
    @method('PUT')

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

      {{-- Account Details --}}
      <div class="col s12 m6">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Account Details</h5>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="account_first_name" name="account_first_name" type="text" class="validate">
                <label for="account_first_name">First Name</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="account_last_name" name="account_last_name" type="text" class="validate">
                <label for="account_last_name">Last Name</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input id="account_phone" name="account_phone" type="text" class="validate">
                <label for="account_phone">Phone Number</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="account_email" name="account_email" type="email" class="validate">
                <label for="account_email">Email</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">group</i>
                <input id="account_relationship" name="account_relationship" type="text" class="validate">
                <label for="account_relationship">Relationship</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Learner's Personal Details --}}
      <div class="col s12 m6">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Learner's Personal Details</h5>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="learner_first_name" name="learner_first_name" type="text" class="validate">
                <label for="learner_first_name">First Name</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="learner_last_name" name="learner_last_name" type="text" class="validate">
                <label for="learner_last_name">Last Name</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input id="learner_phone" name="learner_phone" type="text" class="validate">
                <label for="learner_phone">Phone Number</label>
              </div>
              <div class="input-field col s12">
                <input type="text" class="datepicker" id="dob" name="dob">
                <label for="dob" class="">DOB</label>
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
