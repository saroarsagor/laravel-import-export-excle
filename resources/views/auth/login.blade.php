<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="rtl">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
        content="">
        <meta name="keywords"
        content="">
        <meta name="author" content="PIXINVENT">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{asset('')}}backend/app-assets/css-rtl/pages/authentication.css">
        
        @include('backend.includes.partials.style')
        <style type="text/css">
        .pace-inactive {
        display: none!important;
        }
        .pace-active {
        display: none!important;
        }
        .form-group{padding: 10px 0}
        .dark-layout::-webkit-scrollbar {
        display: none;
        }
        </style>
        @yield('styles')
    </head>
    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="auth-wrapper auth-cover">
                        <div class="auth-inner row m-0">
                         <a class="brand-logo" href="#">
                            
                            <h2 class="brand-text text-primary ms-1">Tismpro</h2>
                        </a>
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('')}}img/login-v2-dark (1).svg" alt="Login V2" /></div>
                        </div>
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Welcome to Tismpro</h2>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-1">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail / Mobile Number') }}</label>
                                        
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                </form>
                                
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @include('backend.includes.partials.script')
    @yield('scripts')
</body>
</html>