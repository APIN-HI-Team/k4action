@extends('layouts.login')

@section('content')
    <div class="container-fluid">
    <div class="row min-vh-100 flex-center no-gutters">
            <div class="col-lg-6 col-md-7 col-xxl-5 py-3">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row no-gutters h-100">
                            <div class="col-md-5 text-white text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-10">
                                    <div class="bg-holder bg-auth-card-shape mb-5"></div>
                                    <div class="z-index-1 position-relative">
                                        <div class="mb-5">
                                            <img src="{{ asset('img/fgn_logo_small.png') }}">
                                        </div>
                                        <p class="text-white opacity-75">
                                            The K4Action is a repository of de-identified patient level data collected from APIN supported states.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="logo-holder mb-5 mt-2">
                                        {{--<img src="http://41.242.58.143/appointments/login-assets/logo.jpg" class="login-logo" />--}}
                                    </div>
                                    <h3 class="text-center">Account Login</h3>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                        <ul><li style="display:none"></li></ul></div>

                                        <div class="form-group">
                                            <label for="card-email">Email address</label>
                                            <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" autocomplete="off" type="email" required id="Input_Email" name="email" value="{{ old('email') }}" />
                                            <div class="col-md-6">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <input id="Input_Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2 pt-4">
                    <span class="text-muted">Other Links: </span>
                    <a class="" href="/public/dashboard">
                        Public Dashboard
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
