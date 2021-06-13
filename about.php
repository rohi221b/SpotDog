<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:03:32 GMT -->
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
                      <!--<li class="current dropdown"><a href="index.php">Home</a>-->
                        <!--<ul>
                          <li><a href="index-2.html">Home Page 01</a></li>
                          <li><a href="index-3.html">Home Page 02</a></li>
                          <li class="dropdown"><a href="#">Header Styles</a>
                            <ul>
                              <li><a href="index-2.html">Header Style 01</a></li>
                              <li><a href="index-3.html">Header Style 02</a></li>
                            </ul>
                          </li>
                        </ul>-->
                      </li>
                      <li><a href="about.php">About</a></li>
                      <!--<li class="dropdown"><a href="about.html">About</a>-->

                      </li>
                        <li><a href="single-service-2.php">Services</a></li>

                          <!--
                          <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                          <li><a href="single-service-3.html">Styling Your Pets</a></li>
                          <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                            <li><a href="service.html">Our Services</a></li>
                          <li><a href="single-service-5.html">Cleaning & Plucking</a></li>
                          <li><a href="single-service-6.html">Coat Handler Pets</a></li>-->

                      <li><a href="gallery.php">Gallery</a></li>
                      <!--<li class="dropdown"><a href="blog.html">News</a>
                        <ul>

                          <li><a href="blog-single.html">Single News</a></li>
                        </ul>
                      </li>-->
                      <li><a href="contact.php">Contact</a></li>
                      <?php
                          if(isset($_SESSION['username'])){
                              echo "<li><a href='logout.php'>Logout</a></li>";
                            echo " <li>Hello, " .$_SESSION['username']."</li>";

                          }
                          else{
                            echo "<li><a href='Login_v3/login.php'>Login</a></li>";
                          }
                      ?>

                    </ul>
                  </div>
                </nav>
              </div>
              <!--<ul class="social-style-one">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>-->
            </div>
          </div>
        </div>
      </div>





    </header>
    <!-- End Main Header -->


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/testimonial-bg.jpg);">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="index.php">Homepage</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- about-style-three -->
    <section class="about-style-three">
        <div class="container">
            <div class="inner-content">
              <!--
                <div class="video-gallery wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <figure class="image-box"><img src="images/resource/video-image.jpg" alt=""></figure>
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                </div>
              -->
                <div class="lower-content centred">
                    <div class="sec-title">
                        <div class="top-title">Few Words About SpotDog</div>
                        <h1>Dog Adoption Center</h1>
                    </div>
                    <div class="text">
                        <p>We at SpotDog truly believe that every pet deserves love and care.SpotDog brings you a wide range of dogs looking for furever homes.We encourage audience to adopt dogs and provide them shelter,love and care.Over thousands of dogs have found homes.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- clients-section -->

    <!--
    <section class="clients-section gray-bg">
        <div class="container">
            <div class="clients-outer">
                <ul class="clients-carousel owl-carousel">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/clients-5.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
  -->
    <!-- clients-section end -->


    <!-- team-style-two -->
    <!--
    <section class="team-style-two alternate-2 centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-title">Pet Care Staff</div>
                <h1>Meet Our Groomers</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-4.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-5.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Mike Albert</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-6.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Sarah Eve</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-7.png" alt=""></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  -->
    <!-- team-style-two end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred" style="background-image: url(images/background/testimonial-bg.jpg);">
        <div class="container">
            <div class="inner-content">
                <div class="testimonial-carousel owl-theme owl-carousel">
                    <div class="testimonial-content">
                        <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                        <span>- Mark Twain</span>
                    </div>
                    <div class="testimonial-content">
                        <h2>“Dogs do speak, but only to those who know how to listen.”</h2>
                        <span>– Orhan Pamuk</span>
                    </div>
                    <div class="testimonial-content">
                        <h2>“The better I get to know men, the more I find myself loving dogs.”</h2>
                        <span> – Charles De Gaulle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- faq-section -->
    <section class="faq-section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title">
                            <div class="top-title">Recent Question Answers</div>
                            <h1>We are here to answer your every query.</h1>
                        </div>
                        <figure class="image-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/faq-image.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                    <div class="faq-content">
                        <!--Accordion Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>Why to adopt a dog?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Adopting a pet is much less expensive than buying a pet at a pet store or through other sources.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>what are dog's favorite activities?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text"> Go on for a walk,run or jog together.Nothing tires out a pup with lots of energy like a long run.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>How long can they be left alone at home</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">An adult dog can be left alone for up to four to six hours a day, as a very general rule of thumb. However, this number can vary widely as it depends on Your Dog’s Training.
</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>What is the best food for dogs?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">While each dog is different, they generally do best on a protein-rich, meat-based diet.Look for brands that specifically name the type of meat, like beef, chicken, or lamb.</div>
                                    </div>
                                </div>
                            </li>
                        </ul><!--End Accordion Box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="container">
            <div class="inner-box">
                <h1>SpotDog is here to Provide<br /> Ideal Adoptable Dog for you.</h1>
                <div class="text">Looking for pawsome friends?</div>
                <a href="contact.html" class="theme-btn">Contact with us</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- main-footer -->
    <footer class="main-footer gray-bg">
        <div class="footer-top">
            <div class="container">
              <!--
                <div class="top-content clearfix">
                    <figure class="footer-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></figure>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
              -->
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

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Poopet/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:03:45 GMT -->
</html>
