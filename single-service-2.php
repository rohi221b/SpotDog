<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/single-service-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:04:11 GMT -->
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
              <figure class="logo"><a href="index.php"><h1>SpotDog</h1></a></figure>
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
                      <!--<li class="dropdown"><a href="#">Services</a>-->
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
              <!--
              <ul class="social-style-one">
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
            <h1>Services</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="index-2.html">Homepage</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- service-details -->
    <section class="sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details">
                        <div class="inner-box">
                            <div class="content-style-one">
                              <!--  <figure class="image-box"><img src="images/resource/service-details-1.jpg" alt=""></figure>-->
                                <h2>Regular Health Checkups</h2>
                                <div class="text">
                                    <p>A regular check–up is a wise idea for all of us, it’s absolutely vital for our pets. Animals obviously can’t always let us know when they are feeling under the weather – though they may exhibit some signs which owners should look out for which may indicate something is wrong, such as being off their food, moving abnormally, panting, vocalising, vomiting, being quiet or lethargic etc. It’s up to us to help keep them healthy and happy with some basic precautions.</p>
                                    <p>Our vet will assess your dog thoroughly at a check–up to look for any signs of illness or other problems. He or she will generally start by weighing your dog, and will check their body condition, skin and fur, eyes and ears, teeth and mouth, and feel around the body, limbs and tail for any potential issues. The vet may look for fleas or other parasites and will administer vaccinations if due. Where teeth exhibit tartar, your vet may recommend a dental procedure.

It’s a good idea to have a chat about any concerns you might have. If the vet feels there may be an issue, he or she would generally suggest further testing. Depending on the potential problem, this might involve a blood test or x–ray.</p>
                                </div>
                            </div>
                            <div class="content-style-two">
                                <h3>General Health Maintenance</h3>
                                <div class="text">
                                    <p>A healthy diet and regular exercise are a great foundation for good health. Speak to our vet about the dog’s current food intake and level of exercise. If your dog is lacking in nutrition, our vet may recommend some dietary changes.

It’s advisable for every pet owner to get to know the basics of health care and what signs to watch for that might indicate a problem.</p>
                                </div>
                                <!--
                                <div class="image-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <figure class="image">
                                                <img src="images/resource/service-details-2.jpg" alt="">
                                                <div class="icon-box"><a href="images/resource/service-details-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                            </figure>
                                        </div>
                                        <!--
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <figure class="image">
                                                <img src="images/resource/service-details-3.jpg" alt="">
                                                <div class="icon-box"><a href="images/resource/service-details-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                            </figure>
                                        </div>


                                    </div>
                                </div>
                              -->
                            </div>
                            <!--
                            <div class="content-style-three">
                                <h3>Why We Are Different</h3>
                                <ul class="list">
                                    <li>Every groomer or trainer wears a photo ID badge.</li>
                                    <li>Mobiles are custom wrapped for easy identification.</li>
                                    <li>We are a fully insured nationally ranked pet center.</li>
                                    <li>All work is backed by our exclusive “Streak-Free Guarantee”.</li>
                                    <li>We offer multiple services to take care of your pets.</li>
                                    <li>Our services are more affordable than you think.</li>
                                </ul>
                                <div class="text">
                                    <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry has been the ndustry standard dummy text ever sincer they llam id condimentum purus In non ex at ligula fringilla bortis. Ut et mauris auctor, aliquet nulla sed, aliquam mauris. Vestibulum sed malesuada dolor. Integer fringilla odio a dolor aliquet, eu euismod lectus porttitor.</p>
                                </div>
                            </div>
                          -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar sidebar">
                      <!--
                        <div class="sidebar-category sidebar-widget gray-bg wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <h3 class="sidebar-title">Services</h3>
                            <div class="widget-content">
                                <ul class="category-list">
                                    <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                    <li class="active"><a href="single-service-2.html">Regular Health Checkups</a></li>
                                    <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                    <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                                    <li><a href="single-service-5.html">Pets Cleaning & Plucking</a></li>
                                    <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                </ul>
                            </div>
                        </div>
                      -->
                        <div class="sidebar-appointment sidebar-widget wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="widget-content centred">
                                <div class="text">Contact Us</div>
                                <h1>Make an Appointment</h1>
                                <a href="contact.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


    <!-- main-footer -->
    <footer class="main-footer gray-bg">
        <div class="footer-top">
          <!--
            <div class="container">
                <div class="top-content clearfix">
                    <figure class="footer-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></figure>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
          -->
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

<!-- Mirrored from azim.commonsupport.com/Poopet/single-service-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:04:11 GMT -->
</html>
