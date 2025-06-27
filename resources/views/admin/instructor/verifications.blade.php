@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">

      {{-- Tab Navigation --}}
      <ul class="tabs">
        <li class="tab col s6"><a class="active" href="#your-documents">Your Documents</a></li>
        <li class="tab col s6"><a href="#submission-history">Submission History</a></li>
      </ul>

      {{-- Your Documents Tab --}}
      <div id="your-documents" class="col s12">
        
        {{-- Driver's Licence (C) --}}
        <div class="card">
          <div class="card-content">
            <span class="card-title">Driver’s Licence (C)</span>
            
            <div class="input-field">
              <label class="active">Expiration Date</label>
              <input type="text" class="datepicker" value="2 Sep 2026" readonly>
            </div>

            <p class="green-text">✔ Provided & verified</p>

            <ul class="collection">
              <li class="collection-item">Driver’s Licence (C) – Front</li>
              <li class="collection-item">Driver’s Licence (C) – Back</li>
            </ul>
          </div>
          <div class="card-action right-align">
            <a href="#" class="btn btn-flat">Edit Document</a>
          </div>
        </div>

        {{-- Driving Instructor’s Licence (C) --}}
        <div class="card">
          <div class="card-content">
            <span class="card-title">Driving Instructor’s Licence (C)</span>

            <div class="input-field">
              <label class="active">Expiration Date</label>
              <input type="text" class="datepicker" value="2 Dec 2026" readonly>
            </div>

            <p class="green-text">✔ Provided & verified</p>
          </div>
          <div class="card-action right-align">
            <a href="#" class="btn btn-flat">Edit Document</a>
          </div>
        </div>

        {{-- WWCC --}}
        <div class="card">
          <div class="card-content">
            <span class="card-title">Working With Children Check (WWCC)</span>

            <div class="input-field">
              <label class="active">Full Name</label>
              <input type="text" value="Kousar Ahmed Siddiqui" readonly>
            </div>

            <div class="input-field">
              <label class="active">Date of Birth</label>
              <div class="row">
                <div class="input-field col s4"><input type="text" value="2" readonly></div>
                <div class="input-field col s4"><input type="text" value="August" readonly></div>
                <div class="input-field col s4"><input type="text" value="1964" readonly></div>
              </div>
            </div>

            <div class="input-field">
              <label class="active">WWCC Number</label>
              <input type="text" value="WWCC89328" readonly>
            </div>

            <div class="input-field">
              <label class="active">WWCC Expiry Date</label>
              <div class="row">
                <div class="input-field col s6"><input type="text" value="January" readonly></div>
                <div class="input-field col s6"><input type="text" value="2029" readonly></div>
              </div>
            </div>

            <div class="input-field">
              <label class="active">Verification Date</label>
              <div class="row">
                <div class="input-field col s6"><input type="text" value="January" readonly></div>
                <div class="input-field col s6"><input type="text" value="2015" readonly></div>
              </div>
            </div>
          </div>
          <div class="card-action right-align">
            <a href="#" class="btn btn-flat">Edit Document</a>
          </div>
        </div>

      </div>

      {{-- Submission History Tab Placeholder --}}
      <div id="submission-history" class="col s12">
        <div class="card-panel grey lighten-4 center-align">
          <p>Submission history not available yet.</p>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
