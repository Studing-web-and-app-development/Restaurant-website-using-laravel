<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eatwell</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('extra-meta')

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    @yield('extra-script')
</head>

<body>
   
    <!-- header-start -->
    <header>

        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @yield('content0')
                                     </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="{{route('products.index')}}">
                                    <img src="{{ asset('frontend/img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+213 88 99 00</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    
   
    @yield('content1')
    
    <div class="best_burgers_area">
        <div class="container">
            @yield('cont')
            <div class="row">
           @yield('content')
                
            </div>
            @yield('conte')
        </div>
    </div>
  @yield('content2')
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                   Algeis
                                </h3>
                                <p>Algies, Algeria <br> 
                                       Street 01 November<br>
                                <a class="number" href="#">+213 88 99 00</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    Djelfa
                                </h3>
                                <p>Djelfa, Algeria  <br> 
                                        street 05 July <br>
                                <a class="number" href="#">+213 88 99 00</a>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Search
                                        </h3>
                                        <form action="{{route('products.search')}}"class="newsletter_form">
                                            <input type="text" name="q" placeholder="search" >
                                            <button type="submit">Search</button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());
                            </script> All rights reserved 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        

        
    <!-- JS here -->
    
   
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js')}}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/scrollIt.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/plugins.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!--contact js-->
    <script src="{{ asset('frontend/js/contact.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.form.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/js/mail-script.js')}}"></script>

    <script src="{{ asset('frontend/js/main.js')}}"></script>
    @yield('extra-js')

</body>

</html>