
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
        <title>@yield('title', 'Register')</title>
        <!-- All Css Links -->
        @include('backend.includes.partials.style')
        <style type="text/css">
        .pace-inactive {
        display: none!important;
        }
        .pace-active {
        display: none!important;
        }
        </style>
        @yield('styles')
    </head>
    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-pag">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
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
                                                
                                                <h2 class="brand-text text-primary ms-1">Register</h2>
                                            </a>
                                            <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-column">Name</label>
                                                            <input type="text" id="first-name-column" class="form-control" placeholder=" Name" name="name" required="" />
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="email">Email</label>
                                                            <input type="email" id="email" class="form-control" placeholder="Your Email" name="email" required="" />
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="mobile">Mobile</label>
                                                            <input type="number" id="mobile" class="form-control" placeholder="Your Mobile" name="mobile" required="" />
                                                            @error('mobile')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                  
                                                   <!--  <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" class="select2 form-control" id="gender" required="">
                                                                <option value="">Select Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                            <div class="valid-feedback">Looks good!</div>
                                                            <div class="invalid-feedback">Please select your Gender</div>
                                                            
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="fp-default"
                                                            class="ccontrol-label">{{ __('Password') }}</label>
                                                            <input type="password" id="password" class="form-control" placeholder="Your password" name="password" required="" />
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="image"
                                                            class="ccontrol-label">{{ __('Select Photo') }}</label>
                                                            <input type="file" class="form-control-file" id="image" name="image" />
                                                            <br>
                                                            @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                     -->
                                                </div>
                                                
                                                
                                                <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                            </form>
                                            <p class="text-center mt-2">
                                                <span>Already have an account?</span>
                                                <a href="{{url('login')}}">
                                                    <span>Sign in instead</span>
                                                </a>
                                            </p>

                                             

                                            <div class="divider my-2">
                                                <div class="divider-text">or</div>
                                            </div>
                                            <div class="auth-footer-btn d-flex justify-content-center">
                                                <a href="#" class="btn btn-facebook">
                                                    <i data-feather="facebook"></i>
                                                </a>
                                                <a href="#" class="btn btn-twitter white">
                                                    <i data-feather="twitter"></i>
                                                </a>
                                                <a href="#" class="btn btn-google">
                                                    <i data-feather="mail"></i>
                                                </a>
                                                <a href="#" class="btn btn-github">
                                                    <i data-feather="github"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Register basic -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        
        <!-- All Js Links -->
        @include('backend.includes.partials.script')
        @yield('scripts')
    </body>
</html>