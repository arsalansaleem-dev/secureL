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
      {{-- Pricing Section --}}
      <div class="col s12">
        <div class="card scrollspy">
          <div class="card-content">
            <h5 class="card-title">Pricing</h5>
            <p>
              <strong>SecureLicence Learners:</strong> from SecureLicence marketplace.<br>
              <strong>Private Learners:</strong> invited to SecureLicence by you.
            </p>

            {{-- Lesson Pricing --}}
            <div class="section">
              <h6>Lesson</h6>
              <p class="grey-text">Price per booking hour</p>
              <ul class="collection">
                <li class="collection-item flex-row-between">
                  <span>
                    <i class="material-icons tiny yellow-text text-darken-2" style="vertical-align: middle;">fiber_manual_record</i>
                    SecureLicence
                  </span>
                  <span>$70.00</span>
                  <a href="#" class="btn-flat right"><i class="material-icons">edit</i></a>
                </li>
                <li class="collection-item flex-row-between">
                  <span>
                    <i class="material-icons tiny blue-text text-darken-2" style="vertical-align: middle;">fiber_manual_record</i>
                    Private
                  </span>
                  <span>$80.00</span>
                  <a href="#" class="btn-flat right"><i class="material-icons">edit</i></a>
                </li>
              </ul>
            </div>

            {{-- Test Package Pricing --}}
            <div class="section">
              <h6>Test Package</h6>
              <p class="grey-text">Pick up 1hr before, 45-minute pre-test warm-up, and drop-off after result</p>
              <ul class="collection">
                <li class="collection-item flex-row-between">
                  <span>
                    <i class="material-icons tiny yellow-text text-darken-2" style="vertical-align: middle;">fiber_manual_record</i>
                    SecureLicence
                  </span>
                  <span>$225.00</span>
                  <a href="#" class="btn-flat right"><i class="material-icons">edit</i></a>
                </li>
                <li class="collection-item flex-row-between">
                  <span>
                    <i class="material-icons tiny blue-text text-darken-2" style="vertical-align: middle;">fiber_manual_record</i>
                    Private
                  </span>
                  <span>$225.00</span>
                  <a href="#" class="btn-flat right"><i class="material-icons">edit</i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      

    </form>
  </div>
</div>
@endsection
