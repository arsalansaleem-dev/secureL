@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Personal Details</h4>

    <form method="POST" action="{{ route('learner.personal.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', auth()->user()->name) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', auth()->user()->phone) }}">
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Update Personal Details</button>
        </div>
    </form>
</div>
@endsection
