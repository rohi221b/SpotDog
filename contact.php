<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:02:00 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SpotDog</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->

    <!--

    <header class="main-header">

        <div class="page-header-mobile-info">
            <div class="page-header-mobile-info-content">
                <div class="header-info clearfix">
                    <ul class="info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>660 Broklyn Street, 88 New York </span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>666 888 0000, Fax: +21 000 333</span>
                        </li>
                        <li>
                            <i class="fa fa-clock"></i>
                            <span>Mon - Fri 9:00 am - 6:00 pm</span>
                        </li>
                    </ul>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle-box clearfix">
                <div class="page-header-mobile-info-toggle"></div>
                <div class="link"><a href="contact.html" class="theme-btn">Appointment</a></div>
            </div>
        </div>

        <div class="header-top">
            <div class="container">
                <div class="header-info clearfix">
                    <ul class="info-list pull-right">
                        <li>
                            <i class="flaticon-mail"></i>
                            <strong><a href="mailto:example@gmail.com">example@gmail.com</a></strong>
                            Email address
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <strong><a href="tel:+886668880000">666 888 0000</a></strong>
                            Phone line
                        </li>
                        <li>
                            <i class="flaticon-clock"></i>
                            <strong>Mon - Fri 9:00 am - 6:00 pm</strong>
                            Working hours
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      -->

<header class="main-header">



          <div class="header-top">
            <div class="container">
              <div class="header-info clearfix">
                <ul class="info-list pull-right">
                  <li>
                    <i class="flaticon-mail"></i>
                    <strong><a href="mailto:example@gmail.com">spotdog@gmail.com</a></strong>
                    Email address
                  </li>
                  <li>
                    <i class="flaticon-phone-call"></i>
                    <strong><a href="tel:+886668880000">9978128665</a></strong>
                    Phone line
                  </li>

                  <li>
                    <i class="flaticon-clock"></i>
                    <strong>Mon - Fri 9:00 am - 6:00 pm</strong>
                    Working hours
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="header-bottom">
            <div class="container">
              <div class="clearfix">
                <div class="logo-box">
                  <figure class="logo"><a href="index-2.html"><h1>SpotDog</h1></a></figure>
                </div>
                <!--<div class="logo-box">
                  <figure class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></figure>
                </div>-->

                <div class="nav-outer clearfix">
                  <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                      <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                          <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="single-service-2.php">Services</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                          <?php
                              if(isset($_SESSION['username'])){
                                echo "Hello, " .$_SESSION['username'];
                                echo "<li><a href='logout.php'>Logout</a></li>";
                              }
                              else{
                                echo "<li><a href='Login_v3/login.php'>Login</a></li>";
                              }
                          ?>
                          <!-- <li><a href="Login_v3/login.php">Login</a></li> -->

                        </ul>
                      </div>
                    </nav>
                  </div>
                  <!--<ul class="social-style-one">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                -->
                </div>
              </div>
            </div>
          </div>




        <!--
        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home Page 01</a></li>
                                                <li><a href="index-3.html">Home Page 02</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style 01</a></li>
                                                    <li><a href="index-3.html">Header Style 02</a></li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                                <li><a href="single-service-2.html">Health Checkups</a></li>
                                                <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                                <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                                                <li><a href="single-service-5.html">Cleaning & Plucking</a></li>
                                                <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li class="dropdown"><a href="#">News</a>
                                            <ul>
                                                <li><a href="blog.html">Our News</a></li>
                                                <li><a href="blog-single.html">Single News</a></li>
                                            </ul>
                                        </li>
                                        <li class="current"><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="social-style-one">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      -->

        <!--Sticky Header-->
        <!--
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home Page 01</a></li>
                                        <li><a href="index-3.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index-2.html">Header Style 01</a></li>
                                            <li><a href="index-3.html">Header Style 02</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                        <li><a href="single-service-2.html">Health Checkups</a></li>
                                        <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                        <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                                        <li><a href="single-service-5.html">Cleaning & Plucking</a></li>
                                        <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog.html">Our News</a></li>
                                        <li><a href="blog-single.html">Single News</a></li>
                                    </ul>
                                </li>
                                <li class="current"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        -->
        <!-- sticky-header end -->





    </header>
    <!-- End Main Header -->


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/testimonial-bg.jpg);">
        <div class="container">
            <h1>Contact</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="index-2.html">Homepage</a></li>
                    <li>Contact</li>

                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- google-map-section -->
    <section class="google-map-section alternate-2">
        <div class="container">
            <div class="google-map-area">


                <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="18.5679"
                    data-map-lng="73.9143"
                    data-icon-path="images/icons/map-marker.png"
                    data-map-title="Viman Nagar,Pune"
                    data-map-zoom="12"
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>Pune</p>","images/icons/map-marker.png"]
                    }'>

                </div>

            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-section -->
    <section class="contact-section centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-title">Contact with Us</div>
                <h1>Write Us a Message</h1>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 form-column">
                    <div class="contact-form-area">
                        <form method="post" action="contactdb.php" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="Name" placeholder="Full name" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="Email" placeholder="Email address" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phoneno" placeholder="Phone number" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write here message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn" name="submit-form">Submit request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- main-footer -->
    <footer class="main-footer gray-bg">

        <div class="footer-top">
            <div class="container">

                <div class="top-content clearfix">
                    <!--<figure class="footer-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></figure>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Explore</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Gallery</a></li>

                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Links</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>

                                    <li><a href="#">Location</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <h3 class="widget-title">Contact</h3>
                            <div class="widget-content">
                                <div class="text">Rambaug Colony,Kothrud<br />Pune,India
                                    <a href="mailto:example@gmail.com">spotdog@gmail.com</a>

                                </div>
                                <div class="phone"><a href="tel:+886668880000">9978128665</a></div>
                                <div class="container">

                                    <ul class="social-style-one">
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>

                                  </div>


                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-5 col-md-12 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <h3 class="widget-title">About</h3>
                            <div class="widget-content">
                                <div class="text">Etiam rhoncu sit amet adip scing simply thin sed ipsum dolor sit amet adip dine scing not avilable in the martket lorem ipsum sem neque.</div>
                                <div class="subscribe-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                            <button type="submit"><i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  -->
                </div>
            </div>
        </div>
        <div class="footer-bottom centred black-bg">
            <div class="container">
                <div class="copyright">&copy; SpotDog 2021. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/appear.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:02:17 GMT -->
</html>
