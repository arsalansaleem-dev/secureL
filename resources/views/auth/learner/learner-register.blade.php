@extends('layouts.auth')

@section('content')
<div role="main" class="main shop py-4">
    <div class="container py-4">
        <div class="row justify-content-center align-items-center">
            <!-- Registration Form -->
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-4">Learner Registration</h2>
                <form method="POST" action="{{ route('learner.register') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Name <span class="text-color-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg text-4" required>
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                            <input type="email" name="email" class="form-control form-control-lg text-4" required>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg text-4" required>
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Confirm Password <span class="text-color-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3">Register</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-center">
                            <a href="{{ route('learner.login') }}" class="btn btn-outline-primary btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3">Already have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right Side Image -->
            <div class="col-md-6 col-lg-5 text-center">
                <img src="/assets/img/login.jpg" class="img-fluid" alt="Learner Register" style="max-height: 400px;">
            </div>
        </div>
    </div>
</div>

@endsection
