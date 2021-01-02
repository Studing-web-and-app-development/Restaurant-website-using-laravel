<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eatwell</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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
                                            <li><a  href="{{route('products.index')}}">home</a></li>
                                            <li><a href="{{route('products.Menu')}}">Menu</a></li>
                                            <li><a class="active" href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('cart.index')}}">Cart 
                                            <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="{{route('products.index')}}">
                                        <img src="{{ asset('frontend/img/logo.png')}}" alt="logo">
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

  <!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg_1 overlay">
    <h3>about</h3>
</div>
<!-- bradcam_area_end -->
<!-- about_area_start -->
<div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="{{ asset('frontend/img/about/1.png')}}" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{ asset('frontend/img/about/2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Best Meals <br>
                                    in your City</h3>
                        </div>
                        <p>
                            Eat well is the best restaurant in this area, we offer high-end services, delicious and varied dishes Pizza, Hamburger
                            Tradutional food, Grills, Tacos, Drinks. 
                            You can now order the dishes you love in the quantity you want
                            Do not forget to visit our restaurant, order your meals, and write your opinions to us
                            With us you can eat your best meals.
                            </p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- gallery_start -->
    <div class="gallery_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                            <div class="section_title mb-70 text-center">
                                    <span>Gallery Image</span>
                                    <h3>Our Gallery</h3>
                                </div>
                    </div>
                </div>
            </div>
            <div class="single_gallery big_img">
                    <a class="popup-image" href="{{ asset('frontend/img/gallery/1.png')}}">
                        <i class="ti-plus"></i>
                    </a>
                <img src="{{ asset('frontend/img/gallery/1.png')}}" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/2.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="{{ asset('frontend/img/gallery/2.png')}}" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/3.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="{{ asset('frontend/img/gallery/3.png')}}" alt="">
            </div>
    
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/4.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="{{ asset('frontend/img/gallery/4.png')}}" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/5.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="{{ asset('frontend/img/gallery/5.png')}}" alt="">
            </div>
            <div class="single_gallery big_img">
                <a class="popup-image" href="img/gallery/6.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="{{ asset('frontend/img/gallery/6.png')}}" alt="">
            </div>
        </div>

    <!-- testimonial_area_start  -->
     <!-- testimonial_area_start  -->
     <div class="testimonial_area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                        <span>Testimonials</span>
                                        <h3>Happy Customers</h3>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_active owl-carousel">
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                                I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/1.png')}}" alt="">
                                                    </div>
                                                    <h4>Ahmed</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                               I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/2.png')}}" alt="">
                                                    </div>
                                                    <h4>Ikram</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                              I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/2.png')}}" alt="">
                                                    </div>
                                                    <h4>Miyyada</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                              I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/3.png')}}" alt="">
                                                    </div>
                                                    <h4>Abderrahmane</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
<!-- testimonial_area_ned  -->

<!-- instragram_area_start -->
<div class="instragram_area">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="{{ asset('frontend/img/instragram/1.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="{{ asset('frontend/img/instragram/2.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="{{ asset('frontend/img/instragram/3.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="{{ asset('frontend/img/instragram/4.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- instragram_area_end -->

<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                   Algeis
                            </h3>
                            <p>Algeis, Algeria <br> 
                                   Street 01 Novmber<br>
                            <a class="number" >+213 88 99 00</a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                Djelfa
                            </h3>
                            <p>Djelfa, Algeria <br> 
                                    Street 05 July<br>
                            <a class="number" >+213 88 99 00</a>

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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

    <!--contact js-->
    <script src="{{ asset('frontend/js/contact.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.form.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/js/mail-script.js')}}"></script>

    <script src="{{ asset('frontend/js/main.js')}}"></script>

</body>

</html>