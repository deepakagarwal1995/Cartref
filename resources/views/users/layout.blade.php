<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Home' }} | Cartrefs</title>
    <meta name="description" content="Cartrefs">
    <meta name="keywords" content="Cartrefs">
    <meta name="author" content="Cartrefs">
    <link rel="icon" href="{{ asset('assets/images/favlogo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favlogo.png') }}" type="image/x-icon">
    <title>Home | Cartrefs</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @yield('head')
</head>

<body class="theme-color-29">
    <!-- loader start -->

    <!-- loader end -->
    <!-- header start -->
    <header class="header-tools zindex-up header-style top-relative">
        <div class="mobile-fix-option"></div>
        <div class="top-header dark-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-contact text-center">
                            <ul>
                                <li>Enjoy Free Shipping On All Orders</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="logo-menu-part">
            <div class="container container-lg border-bottom-0 rounded-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.html"> <img src="{{ asset('assets/images/logo.png') }}"
                                            class="img-fluid  " alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav id="main-nav">
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li><a href="index.html">Home</a></li>
                                            <li class="mega" id="hover-cls">
                                                <a href="#">Men</a>
                                                <ul class="mega-menu full-mega-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col mega-box">
                                                                    <div class="link-section  mb-5">
                                                                        <div class="menu-title">
                                                                            <h5>Category</h5>
                                                                        </div>
                                                                        <div class="menu-content">
                                                                            <ul>
                                                                                <li><a href="#">Footwear</a></li>
                                                                                <li><a href="#">Accessories</a>
                                                                                </li>
                                                                                <li><a href="#">Western Wear</a>
                                                                                </li>
                                                                                <li><a href="#">Innerwear &
                                                                                        Sleepwear</a></li>
                                                                                <li><a href="#">Activewear</a>
                                                                                </li>
                                                                                <li><a href="#">Ethinic & Fushion
                                                                                        Wea</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col mega-box"></div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/72109c5fdd772aabc1af6e1fb99a85de.jpeg') }}">
                                                                        <p>Jeans</p>
                                                                    </a>

                                                                </div>

                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/6326b701b697765ee6de87b347603ed0.jpeg') }}">
                                                                        <p>Trousers</p>
                                                                    </a>

                                                                </div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/f018996343407c5dbfd6773a434a43d8.jpeg') }}">
                                                                        <p>Shorts</p>
                                                                    </a>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega" id="hover-cls">
                                                <a href="#">Women</a>
                                                <ul class="mega-menu full-mega-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col mega-box">
                                                                    <div class="link-section  mb-5">
                                                                        <div class="menu-title">
                                                                            <h5>Category</h5>
                                                                        </div>
                                                                        <div class="menu-content">
                                                                            <ul>
                                                                                <li><a href="#">Footwear</a></li>
                                                                                <li><a href="#">Accessories</a>
                                                                                </li>
                                                                                <li><a href="#">Western Wear</a>
                                                                                </li>
                                                                                <li><a href="#">Innerwear &
                                                                                        Sleepwear</a></li>
                                                                                <li><a href="#">Activewear</a>
                                                                                </li>
                                                                                <li><a href="#">Ethinic & Fushion
                                                                                        Wea</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col mega-box"></div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/1b573e705bb911a6c6c599b03017cfa0 (1).jpeg') }}">
                                                                        <p>Jeans</p>
                                                                    </a>

                                                                </div>

                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/6326b701b697765ee6de87b347603ed0.jpeg') }}">
                                                                        <p>Trousers</p>
                                                                    </a>

                                                                </div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/f018996343407c5dbfd6773a434a43d8.jpeg') }}">
                                                                        <p>Shorts</p>
                                                                    </a>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega" id="hover-cls">
                                                <a href="#">Kids</a>
                                                <ul class="mega-menu full-mega-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col mega-box">
                                                                    <div class="link-section  mb-5">
                                                                        <div class="menu-title">
                                                                            <h5>Category</h5>
                                                                        </div>
                                                                        <div class="menu-content">
                                                                            <ul>
                                                                                <li><a href="#">Footwear</a></li>
                                                                                <li><a href="#">Accessories</a>
                                                                                </li>
                                                                                <li><a href="#">Western Wear</a>
                                                                                </li>
                                                                                <li><a href="#">Innerwear &
                                                                                        Sleepwear</a></li>
                                                                                <li><a href="#">Activewear</a>
                                                                                </li>
                                                                                <li><a href="#">Ethinic & Fushion
                                                                                        Wea</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col mega-box"></div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/1b573e705bb911a6c6c599b03017cfa0 (1).jpeg') }}">
                                                                        <p>Jeans</p>
                                                                    </a>

                                                                </div>

                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/6326b701b697765ee6de87b347603ed0.jpeg') }}">
                                                                        <p>Trousers</p>
                                                                    </a>

                                                                </div>
                                                                <div class="col mega-box">
                                                                    <a href="#" class="cat">
                                                                        <img
                                                                            src="{{ asset('assets/images/f018996343407c5dbfd6773a434a43d8.jpeg') }}">
                                                                        <p>Shorts</p>
                                                                    </a>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Decor</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="#">Learn More</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div>
                                    <div class="icon-nav">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="{{ asset('assets/images/icon/search.png') }}"
                                                        onclick="openSearch()" class="img-fluid  " alt="">
                                                    <i class="ti-search" onclick="openSearch()"></i>
                                                </div>
                                                <div id="search-overlay" class="search-overlay">
                                                    <div>
                                                        <span class="closebtn" onclick="closeSearch()"
                                                            title="Close Overlay">×</span>
                                                        <div class="overlay-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <form>
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Search a Product">
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary"><i
                                                                                    class="fa fa-search"></i></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="{{ asset('assets/images/icon/location.png') }}"
                                                        class="img-fluid  " alt="">
                                                    <i class="ti-location-pin"></i>Agra
                                                </div>
                                                <div class="show-div setting">

                                                    <ul>
                                                        <li><a href="#">Agra</a> </li>
                                                        <li><a href="#">Mathura</a> </li>
                                                        <li><a href="#">Agra</a> </li>
                                                        <li><a href="#">Mathura</a> </li>
                                                        <li><a href="#">Agra</a> </li>
                                                        <li><a href="#">Mathura</a> </li>
                                                    </ul>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    @yield('content')


    <!-- footer -->
    <footer class="footer-dark">
        <section class="section-t-space dark-layout">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="sub-title">
                            <div class="footer-tittle">
                                <h4>Join our club, get 15% off for your Birthday</h4>
                            </div>
                            <div class="footer-content">
                                <div class="input-group mb-3 app_f_g">
                                    <input type="text" class="form-control fot_mail"
                                        placeholder="Enter your Email address">
                                    <i class="ti ti-arrow-right"></i>

                                </div>
                                <div>
                                    <label style="    color: #c3c3c3;"><input type="checkbox"> &nbsp; By Submittng
                                        your email, you agree to receive advertising emails from Cartrefs.</label>
                                </div>
                                <div class="footer-logo"><img
                                        src="{{ asset('assets/images/cf095a7471c898e7ac54979e54555cef.png') }}"
                                        alt="" style="    max-height: 44px;margin-top: 10px;"></div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-tittle">
                                <h4>About cartrefs</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-tittle">
                                <h4>Help & Support</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping policy</a></li>
                                    <li><a href="#">refund & return</a></li>
                                    <li><a href="#">faqs</a></li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-tittle">
                                <h4>Join Up</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">cartrefs Club</a></li>
                                    <li><a href="#">carrer</a></li>
                                    <li><a href="#">visit us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container container-lg">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2024 @SVTINDIA. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/icon/visa.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/icon/mastercard.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/icon/paypal.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img
                                            src="{{ asset('assets/images/icon/american-express.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/images/icon/discover.png') }}"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- theme setting -->
    <!-- tap to top start -->
    <div class="tap-top gradient-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->
    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- slick js-->
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <!-- wow js-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- menu js-->
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <!--  js-->
    <!-- <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script> -->
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Notification js-->
    <!-- <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

    <script src="{{ asset('assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('assets/js/color-setting.js') }}"></script> -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/custom-slick-animated.js') }}"></script>
    @yield('scripts')
    <script>
        new WOW().init();

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>
