<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- CSS FILES -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">



    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">



</head>

<body id="section_1">


    <nav class="navbar navbar-expand-lg bg-light shadow-lg ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt="">
                <span>
                    3rood
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">

                        <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active' : '' }}"
                            href="/home">Home</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('projects*') ? 'active' : '' }}" href="/allshops">Shops</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="/about">Join us</a>
                    </li>



                </ul>


                <ul class="navbar-nav ms-auto">
                    @auth

                        {{-- if user logged in --}}


                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle " href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-fluid avatar-image"
                                    style="width:50px; height:50px" alt=""></a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink"
                                id="profilemenu">

                                @can('admin')
                                    <li><a class="dropdown-item" style="font-size:15px;" href="/dashboard">Dashboard</a></li>
                                @else
                                    <li><a class="dropdown-item" style="font-size:15px;" href="/profile">View Profile</a></li>
                                    <li><a class="dropdown-item" style="font-size:15px;" href="/editProfile">Edit Profile</a>
                                    </li>
                                    @if (Auth::user()->google_id == null)
                                        <li>
                                            <a class="dropdown-item" style="font-size:15px;" href="/changepass">Change
                                                password</a>
                                        </li>
                                    @endif
                                @endcan
                                <li>
                                    <form method="post" action="/logout">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger pt-2"
                                            style="font-size:15px;">
                                            Logout
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @else
                        <li><a href="/cart"><i class="bi bi-cart-fill nav-item ms-3 btn" style="font-size: 25px"></i></a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
    </nav>
    @if (session()->has('message'))
        <div class="alert alert-success text-center">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('error_message'))
        <div class="alert alert-danger text-center">
            {{ session()->get('error_message') }}
        </div>
    @endif

    @yield('content')



    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    {{-- <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt=""> --}}
                    <h5 class="site-footer-title mb-3">Get in Touch</h5>
                    <p style="color: white">34/8, East Hukupara, Gifirtok, Sadan.
                        support@fruitkha.com
                        +00 111 222 3333</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>



                    <ul class="footer-menu">



                        <li class="footer-menu-item"><a href="/" class="footer-menu-link">Home</a></li>
                        <li class="footer-menu-item"><a href="/about" class="footer-menu-link">About</a></li>
                        <li class="footer-menu-item"><a href="/register" class="footer-menu-link">Join Us</a></li>
                        <li class="footer-menu-item"><a href="/projects" class="footer-menu-link">contact</a></li>



                        @if (auth()->user())
                            <li class="footer-menu-item"><a href="/volunteer" class="footer-menu-link">Become a
                                    volunteer</a></li>
                        @endif


                    </ul>
                </div>




                <div class="col-lg-4 col-md-6 col-12 mx-auto" style="padding-bottom:10px;">
                    <form class="custom-form subscribe-form" action="/newsletterform" method="post"
                        style="width: 350px; ">
                        @csrf
                        <h5 class="mb-4">Newsletter Form</h5>

                        <input type="email" name="email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                            class="form-control"
                            @if (Auth::check()) value="{{ auth()->user()->email }}" @endif
                            placeholder="Email Address" required>
                        @error('email')
                            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                        @enderror



                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">Subscribe</button>
                        </div>
                    </form>
                </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    {{-- <script src="{{ asset('js/click-scroll.js') }}"></script> --}}
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
