<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>@yield('title', 'Login')</title>
        <!-- All Css Links -->
        @include('backend.includes.partials.style')
        <style type="text/css">
        .pace-inactive {
        display: none!important;
        }
        .pace-active {
        display: none!important;
        }
        .form-group{padding: 10px 0}
        </style>
        @yield('styles')
    </head>
    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-pag">
        <div class="container">
            <div class="row justify-content-md-center">
                <!-- <div class="col-lg-3">
                </div> -->
                <div class="col-lg-5">
                    <div class="app-content content" style="margin-top: 150px">
                        <div class="content-overlay"></div>
                        <div class="header-navbar-shadow"></div>
                        <div class="content-wrapper">
                            <div class="content-header row">
                            </div>
                            <div class="content-body">
                                <div class="auth-wrapper auth-basic px-2">
                                    <div class="auth-inner my-2">
                                        <!-- Register basic -->
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <a href="index.html" class="brand-logo">
                                                    <h2 class="brand-text text-primary text-center">Login</h2>
                                                </a>
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail / Mobile Number') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                  <!--   <div class="form-group row">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Remember Me') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                            </button>
                                                            <!-- @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                            @endif -->
                                                           
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                        <!-- /Register basic -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-lg-4">
                </div> -->
            </div>
        </div>
        
        <!-- All Js Links -->
        @include('backend.includes.partials.script')
        @yield('scripts')
    </body>
</html>