<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/fontawesome.css" />

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css" />

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link rel="icon" href="assets/img/favicon.png" type="image/png" />
</head>

<body>

    {{-- <div id="loading">
        <div class="loader"></div>
    </div> --}}


    <header class="header-area">


        <div class="main-navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo1.png" alt="logo">
                            </a>
                        </div>
                        <div class="cart responsive">
                            <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                                <span class="badge">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo1.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active toggle">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link toggle">Destinations<i
                                            class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/destinations" class="nav-link">Destinations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="destination-details.html" class="nav-link">Destinations Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link toggle">Tours<i
                                            class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="tours.html" class="nav-link">Tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="special-offers.html" class="nav-link">Trip Offers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about-us.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link toggle">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>


    @yield('content')


    <footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="index.html">
                                    <img src="assets/img/logo2.png" alt="Logo" />
                                </a>
                            </div>
                            <p>You can dream, create, design, and build the most wonderful place.</p>
                            <div class="contact-info">
                                <div class="content">
                                    <a href="tel:+0123456987"><i class='bx bx-phone'></i>+0123 456 987</a>
                                </div>
                                <div class="content">
                                    <a href="#"><i class='bx bx-map'></i>Mon-Fri: 8 AM – 7 PM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Latest News</h5>
                            <ul class="footer-news">
                                <li class="content">
                                    <a href="blog-details.html">Surrounded by the peaceful waters of Lake Victoria.</a>
                                    <span>October 05, 2020</span>
                                    <hr>
                                </li>
                                <li class="content">
                                    <a href="blog-details.html">Morning came very early today. The alarm went off at 4
                                        am</a>
                                    <span>October 05, 2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Quick Links</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="destinations.html">Destinations</a>
                                </li>
                                <li>
                                    <a href="blog-style-1.html">Latest Blog</a>
                                </li>
                                <li>
                                    <a href="team.html">Our Team</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Instagram Post</h5>
                            <ul class="instagram-post">
                                <li>
                                    <img src="assets/img/instagram1.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram2.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram3.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram4.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram5.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram6.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copy-right-area">
                <div class="container">
                    <div class="copy-right-content">
                        <p>
                            Copyright 2021.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.filterizr.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/meanmenu.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>