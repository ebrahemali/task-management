@extends('layouts.app')

@section('content')
<div class="d-flex flex-column min-vh-100">
    <div class="row justify-content-center my-auto">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="p-3">
                        <div class="mb-3 text-center mb-md-4">
                            <a href="index.html" class="d-block auth-logo">
                                <img src="assets/images/task-list_7656406.png" alt="" height="100"
                                    class="auth-logo-dark">
                                <img src="assets/images/task-list_7656406.png" alt="" height="100"
                                    class="auth-logo-light">
                            </a>
                        </div>
                        <div class="mb-4 text-center">
                            <h5 class="mb-1">Welcome Back !</h5>
                        </div>
                        <form method="POST" class="form-horizontal mt-3" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input id="username" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email"
                                    autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-password mb-3 auth-pass-inputgroup">
                                <label class="form-label" for="userpassword">Password</label>
                                <div class="position-relative">

                                    <input id="password" type="password" placeholder="Enter password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="form-checkbox">
                                        <input class="form-check-input me-1" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>


                                        <label class="form-label text-muted font-size-13 fw-medium"
                                            for="customControlInline">Remember
                                            me</label>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-sm-6 text-sm-end">
                                    @if (Route::has('password.request'))
                                    <a class="text-muted font-size-13 fw-medium" href="{{ route('password.request') }}">
                                        <i class="mdi mdi-lock">{{ __('Forgot Your Password?') }}</i>
                                    </a>
                                    @endif

                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row justify-content-center">
                                <div class="col-sm-4 text-center">
                                    <button class="btn btn-primary w-100 rounded-pill" type="submit">Log
                                        In</button>
                                </div>
                            </div><!-- end row -->
                        </form><!-- end form -->

                    </div>
                </div><!-- end card-body -->

            </div><!-- end card -->
            <div class="mt-3 text-center text-muted">
                <p class="mb-0">Don't have an account ? <a href="register" class="fw-medium"> Signup
                        now </a></p>
            </div>


            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center text-muted p-4">
                        <p class="mb-0">©
                            <script>
                            document.write(new Date().getFullYear())
                            </script> Probic. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Pichforest
                        </p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>

</div>
@endsection