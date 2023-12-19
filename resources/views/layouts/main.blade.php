<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Using Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="py-2 px-5">
            <nav class="navbar navbar-expand-md navbar-light bg-blue rounded rounded-5 py-2">
                <div class="container-fluid mx-5">
                    <a class="navbar-brand text-white fs-4" href="{{ url('/') }}" style="font-weight: bolder">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <div class="search">
                                    <form action="#" method="post">
                                        <input type="text" name="search" placeholder="Search items here" class="text-white">
                                        <button type="submit" name="button">
                                        <i class="fas fa-search"></i> 
                                        </button>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fa fa-phone mx-2" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('getCartItems') }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('main') }}"><i class="fa fa-user mx-2" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="py-2 px-5">
            <div class="container">
                <div class="d-flex flex-column h-100 rounded rounded-5 py-3 px-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="features-card-item style-1 text-center">
                                <div class="icon d-flex justify-content-center mb-3">
                                    <i class="far fa-copyright fa-2x"></i>
                                </div>
                                <h3>54 Brands</h3>
                                <p class="text-muted">Trade success indicators: price, market, risk management, volume, and many more.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-truck fa-2x"></i>
                            </div>
                            <h3>Fast Delivery</h3>
                            <p class="text-muted">Tools for mastering risk, such as analytical software, risk assessment methods</p>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-dollar-sign fa-2x"></i>
                            </div>
                            <h3>COD Services</h3>
                            <p class="text-muted">Different order types, including limit, stop, and market orders, are vital for success</p>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-truck fa-2x"></i>
                            </div>
                            <h3>100% Original Products</h3>
                            <p class="text-muted">Different order types, including limit, stop, and market orders, are vital for success</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2 px-5">
            <div class="container-fluid">
                <div class="d-flex flex-column h-100 bg-blue rounded rounded-5 py-3 px-5">
                    <footer class="w-100 pt-4 flex-shrink-0">
                        <div class="row gy-4 gx-5">
                            <div class="col-md-4">
                                <h3 class="text-white" style="font-weight: bolder">Phonetronics</h3>
                                <p class="small text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-2">
                                <h5 class="text-white mb-3">About</h5>
                                <ul class="list-unstyled text-white">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">How are we</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h5 class="text-white mb-3">Discover</h5>
                                <ul class="list-unstyled text-white">
                                    <li><a href="#">Phonetronics Pro</a></li>
                                    <li><a href="#">Phonetronics Sport</a></li>
                                    <li><a href="#">Phonetronics Cool</a></li>
                                    <li><a href="#">Phonetronics</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h5 class="text-white mb-3">Discover</h5>
                                <ul class="list-unstyled text-white">
                                    <li><a href="#">Store & Services</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Promotion</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h5 class="text-white mb-3">Help Center</h5>
                                <ul class="list-unstyled text-white">
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Academy</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>                           
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3 mb-3">
                            <div class="col-md-12 d-flex">
                                <div style="width: 100%; border-bottom: 1px solid white;"></div>
                            </div>
                        </div>
                        <div class="row gy-4 gx-5">
                            <div class="col-md-4">
                                <h6 class="text-white mb-3">@Copyrights 2023 Phonetronics</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-white mb-3">Terms of Services</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-white mb-3">Privacy</h6>
                                
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-white mb-3">Cookies</h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-white mb-3">English</h6>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
