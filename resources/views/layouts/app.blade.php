
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Doctor')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/jssor.slider.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    @yield('styles')

    <style>
        .admission-list a {
            padding: 9px 17px !important;
            background-color: rgb(152 0 255)
        }
        .active{background-color: #c5c5cd}
        .active a{color: white}
    </style>

     <!-- END: Custom CSS-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>


<body>

    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="">
            <div class="container">
                <a class="navbar-brand" href="">
                  <!--  <h4>Import</h4> -->
                </a>
             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto liColor">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/')}}" style="font-size: 20px;color: black">Import Referrals Table</a>
                         </li>
                        <li class="nav-item {{ request()->is('user-data-page') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('user-data-page')}}" style="font-size: 20px;color: black">Import User Table</a>
                         </li>
                        <li class="nav-item {{ request()->is('business-networks-page') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('business-networks-page')}}" style="font-size: 20px;color: black">Import Business Networks</a>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>

    <main>
        @yield('content')
    </main>







    <script type="text/javascript">
        jssor_1_slider_init();
    </script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoplay: true,
            touchDrag: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/jssor.slider-28.1.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jssor.slider.js') }}"></script>
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>

    @yield('scripts')

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   {!! Toastr::message() !!}


</body>

</html>
