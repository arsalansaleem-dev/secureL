@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('instructor.availability.store') }}" class="col s12">
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

      {{-- Service Area --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Service Area</h5>
            <p>You can add or remove suburbs around Sydney where learners can book with you.</p>

            <div class="input-field">
              <select id="suburb_selector" multiple>
                <option value="" disabled selected>Select suburbs</option>
                {{-- Populate options dynamically --}}
              </select>
              <label>Select suburbs around Sydney</label>
            </div>

            {{-- Map placeholder --}}
            <div class="card-panel" style="height: 400px;">
              <div id="map" style="width: 100%; height: 100%;">[Map will render here]</div>
            </div>

            {{-- Driving Test Locations --}}
            <div class="input-field">
              <label>Driving Test Locations</label><br><br>
              <select multiple name="test_locations[]">
                <option value="Blacktown">Blacktown</option>
                <option value="Castle Hill">Castle Hill</option>
                <option value="Bankstown">Bankstown</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      {{-- Availability --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Availability Settings</h5>
            <p>Define your availability per day and default scheduling preferences.</p>

            {{-- Operating Hours for Each Day --}}
            @php
              $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            @endphp

            @foreach ($days as $day)
              <div class="row valign-wrapper">
                <div class="col s2">
                  <label>
                    <input type="checkbox" name="days[{{ strtolower($day) }}][enabled]" />
                    <span>{{ strtoupper($day) }}</span>
                  </label>
                </div>

                <div class="input-field col s2">
                  <input type="time" name="days[{{ strtolower($day) }}][start]" />
                  <label class="active">Start</label>
                </div>

                <div class="input-field col s2">
                  <input type="time" name="days[{{ strtolower($day) }}][end]" />
                  <label class="active">End</label>
                </div>
              </div>
            @endforeach

            <div class="row">
              {{-- Default Travel Time --}}
              <div class="input-field col s6">
                <input id="default_travel_time" name="default_travel_time" type="number" class="validate" min="0">
                <label for="default_travel_time">Default Travel Time (minutes)</label>
              </div>

              {{-- Default Calendar View --}}
              <div class="input-field col s6">
                <label>Default Calendar View</label><br><br>
                <label><input name="calendar_view" type="radio" value="day" /> <span>Day</span></label><br>
                <label><input name="calendar_view" type="radio" value="week" /> <span>Week</span></label><br>
                <label><input name="calendar_view" type="radio" value="month" /> <span>Month</span></label>
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
              Save Availability
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);

    document.getElementById('map').innerHTML = 'Google Map placeholder';
  });
</script>
@endpush
@endsection
