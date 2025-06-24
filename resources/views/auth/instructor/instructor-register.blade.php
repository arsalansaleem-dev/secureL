@extends('layouts.auth')

@section('content')
<div role="main" class="main shop py-4">
    <div class="container py-4">
        <div class="row justify-content-center align-items-center">
            <!-- Registration Form -->
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-4">Submit a request</h2>
                <form method="POST" action="{{ route('instructor.register') }}" class="needs-validation" novalidate>
                    @csrf

                    {{-- Which best describes you? --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Which best describes you? <span class="text-color-danger">*</span></label>
                            <select name="description_type" class="form-control form-control-lg text-4" required>
                                <option value="">-- Please select --</option>
                                <option value="38176339468825" data-url="https://support.securelicence.com.au/hc/en-au/requests/new?ticket_form_id=38176339468825">
                                    I am learning to drive
                                </option>
                                <option value="38177932642457" data-url="https://support.securelicence.com.au/hc/en-au/requests/new?ticket_form_id=38177932642457">
                                    I am a Driving Instructor
                                </option>
                                <option value="11680978361113" data-url="https://support.securelicence.com.au/hc/en-au/requests/new?ticket_form_id=11680978361113" selected>
                                    I am a Driving Instructor interested in joining SecureLicence
                                </option>
                                <option value="11572792939417" data-url="https://support.securelicence.com.au/hc/en-au/requests/new?ticket_form_id=11572792939417">
                                    I am interested in becoming a Driving Instructor
                                </option>
                                <option value="10331517236889" data-url="https://support.securelicence.com.au/hc/en-au/requests/new?ticket_form_id=10331517236889">
                                    I have a Media / PR enquiry
                                </option>
                            </select>
                            @error('description_type') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Name --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Name <span class="text-color-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg text-4" required>
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                            <input type="email" name="email" class="form-control form-control-lg text-4" required>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Transmission Type --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Transmission Type <span class="text-color-danger">*</span></label>
                            <select name="transmission_type" class="form-control form-control-lg text-4" required>
                                <option value="">-- Please select --</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">Manual</option>
                                <option value="both">Both</option>
                            </select>
                            @error('transmission_type') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Postcode --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Postcode <span class="text-color-danger">*</span></label>
                            <input type="text" name="postcode" class="form-control form-control-lg text-4" required>
                            @error('postcode') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Subject --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Subject <span class="text-color-danger">*</span></label>
                            <input type="text" name="subject" class="form-control form-control-lg text-4" required>
                            @error('subject') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Tell Us More --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Tell us more <span class="text-color-danger">*</span></label>
                            <textarea name="message" rows="5" class="form-control form-control-lg text-4" required></textarea>
                            @error('message') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    {{-- Password --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg text-4" required>
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Confirm Password <span class="text-color-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>



                    {{-- Submit --}}
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Right Side Image -->
            <div class="col-md-6 col-lg-5 text-center">
                <img src="/assets/img/login.jpg" class="img-fluid" alt="Instructor Register" style="max-height: 400px;">
            </div>
        </div>
    </div>
</div>
@endsection
