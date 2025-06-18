@extends('layouts.auth')

@section('content')
<div role="main" class="main shop py-4">
    <div class="container py-4">
        <div class="row justify-content-center align-items-center">
            <!-- Login Form -->
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-4">Learner Login</h2>
                <form action="{{ route('learner.login') }}" id="frmSignIn" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-md-auto">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme" name="remember">
                                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3">Login</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-center">
                            <a href="{{ route('learner.register') }}" class="btn btn-outline-primary btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3">Register</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right Side Image -->
            <div class="col-md-6 col-lg-5 text-center">
                <img src="/assets/img/login.jpg" class="img-fluid" alt="Learner Login" style="max-height: 400px;">
            </div>
        </div>
    </div>
</div>

@endsection
