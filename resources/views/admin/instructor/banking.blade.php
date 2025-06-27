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

      {{-- Billing Information --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Billing Information</h5>

            <div class="row">
              {{-- Business Name --}}
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">business</i>
                <input id="business_name" name="business_name" type="text" class="validate"
                       value="{{ old('business_name', $billingDetails->business_name ?? '') }}">
                <label for="business_name" class="{{ old('business_name', $billingDetails->business_name ?? '') ? 'active' : '' }}">Business Name</label>
              </div>

              {{-- ABN --}}
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">pin</i>
                <input id="abn" name="abn" type="text" class="validate"
                       value="{{ old('abn', $billingDetails->abn ?? '') }}">
                <label for="abn" class="{{ old('abn', $billingDetails->abn ?? '') ? 'active' : '' }}">ABN</label>
              </div>

              {{-- Billing Address --}}
              <div class="input-field col s12">
                <i class="material-icons prefix">home</i>
                <input id="billing_address" name="billing_address" type="text" class="validate"
                       value="{{ old('billing_address', $billingDetails->billing_address ?? '') }}">
                <label for="billing_address" class="{{ old('billing_address', $billingDetails->billing_address ?? '') ? 'active' : '' }}">Billing Address</label>
              </div>

              {{-- Suburb --}}
              <div class="input-field col s12 m4">
                <i class="material-icons prefix">location_city</i>
                <input id="suburb" name="suburb" type="text" class="validate"
                       value="{{ old('suburb', $billingDetails->suburb ?? '') }}">
                <label for="suburb" class="{{ old('suburb', $billingDetails->suburb ?? '') ? 'active' : '' }}">Suburb</label>
              </div>

              {{-- Postcode --}}
              <div class="input-field col s12 m4">
                <i class="material-icons prefix">markunread_mailbox</i>
                <input id="postcode_billing" name="postcode_billing" type="text" class="validate"
                       value="{{ old('postcode_billing', $billingDetails->postcode ?? '') }}">
                <label for="postcode_billing" class="{{ old('postcode_billing', $billingDetails->postcode ?? '') ? 'active' : '' }}">Postcode</label>
              </div>

              {{-- State --}}
              <div class="input-field col s12 m4">
                <i class="material-icons prefix">map</i>
                <input id="state" name="state" type="text" class="validate"
                       value="{{ old('state', $billingDetails->state ?? '') }}">
                <label for="state" class="{{ old('state', $billingDetails->state ?? '') ? 'active' : '' }}">State</label>
              </div>

              {{-- GST Registered --}}
              <div class="col s12">
                <label class="active">Is your business registered for GST?</label>
                <p>
                  <label>
                    <input name="gst_registered" type="radio" value="yes"
                           {{ old('gst_registered', $billingDetails->gst_registered ?? '') === 'yes' ? 'checked' : '' }} />
                    <span>Yes</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="gst_registered" type="radio" value="no"
                           {{ old('gst_registered', $billingDetails->gst_registered ?? '') === 'no' ? 'checked' : '' }} />
                    <span>No</span>
                  </label>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

       {{-- Banking Information --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Banking Information</h5>

            <div class="row">
              {{-- Account Name --}}
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">account_circle</i>
                <input id="account_name" name="account_name" type="text" class="validate" 
                       value="{{ old('account_name', $bankDetails->account_name ?? '') }}">
                <label for="account_name" class="{{ old('account_name', $bankDetails->account_name ?? '') ? 'active' : '' }}">Account Name</label>
              </div>

              {{-- BSB --}}
              <div class="input-field col s12 m3">
                <i class="material-icons prefix">pin</i>
                <input id="bsb" name="bsb" type="text" class="validate" 
                       value="{{ old('bsb', $bankDetails->bsb ?? '') }}">
                <label for="bsb" class="{{ old('bsb', $bankDetails->bsb ?? '') ? 'active' : '' }}">BSB</label>
              </div>

              {{-- Account Number --}}
              <div class="input-field col s12 m3">
                <i class="material-icons prefix">credit_card</i>
                <input id="account_number" name="account_number" type="text" class="validate" 
                       value="{{ old('account_number', $bankDetails->account_number ?? '') }}">
                <label for="account_number" class="{{ old('account_number', $bankDetails->account_number ?? '') ? 'active' : '' }}">Account Number</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Payout Frequency --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Payout Frequency</h5>

            <div class="row">
              <div class="col s12">
                <label class="active">Choose your payout frequency</label>
                <p>
                  <label>
                    <input name="payout_frequency" type="radio" value="weekly"
                           {{ old('payout_frequency', $bankDetails->payout_frequency ?? '') === 'weekly' ? 'checked' : '' }} />
                    <span>Weekly</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="payout_frequency" type="radio" value="fortnightly"
                           {{ old('payout_frequency', $bankDetails->payout_frequency ?? '') === 'fortnightly' ? 'checked' : '' }} />
                    <span>Fortnightly</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="payout_frequency" type="radio" value="four_weeks"
                           {{ old('payout_frequency', $bankDetails->payout_frequency ?? '') === 'four_weeks' ? 'checked' : '' }} />
                    <span>Every four weeks</span>
                  </label>
                </p>
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
