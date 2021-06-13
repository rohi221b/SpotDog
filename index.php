<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 11:57:28 GMT -->

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
        <div class="nav-outer clearfix">
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg navbar-dark">

                <div class="navbar-header">

                  <!-- Toggle Button -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar">SpotDog</span>
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
                            echo "<li><a href='logout.php'>Logout</a></li>";
                          echo " <li>Hello, " .$_SESSION['username']."</li>";

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


  </header>
  <!-- End Main Header -->


  <!-- main-slider -->
  <section class="main-slider centred">
    <div class="main-slider-carousel owl-carousel owl-theme">
      <div class="slide" style="background-image:url(images/main-slider/slider-1.jpg)">
        <div class="container">
          <div class="content-box">
            <div class="top-text">Trusted Dog Adoption Center</div>
            <h1>Get your furry companion</h1>
            <div class="slider-btn"><a href="gallery.php" class="theme-btn">View Projects</a></div>
          </div>
        </div>
      </div>
      <!--
      <div class="slide" style="background-image:url(images/main-slider/slider-2.jpg)">
        <div class="container">
          <div class="content-box">
            <div class="top-text">Trusted Dog Adoption Center</div>
            <h1>Get your furry companion</h1>
            <div class="slider-btn"><a href="gallery.php" class="theme-btn">View Projects</a></div>
          </div>
        </div>
      </div>
      <div class="slide" style="background-image:url(images/main-slider/slider-1.jpg)">
        <div class="container">
          <div class="content-box">
            <div class="top-text">Trusted Dog Adoption Center</div>
            <h1>Get your furry companion</h1>
            <div class="slider-btn"><a href="gallery.php" class="theme-btn">View Projects</a></div>
          </div>
        </div>
      </div>
    -->
    </div>
  </section>
  <!-- main-slider end -->


  <!-- welcome-section -->
  <section class="welcome-section sec-pad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
          <div class="content-box centred">
            <div class="sec-title">
              <div class="top-title">Welcome to SpotDog</div>
              <h1>Get your Furry companion.</h1>
            </div>
            <div class="text">
              <p>We at SpotDog truly believe that every pet deserves love and care.SpotDog brings you a wide range of dogs looking for furever homes.</p>
            </div>
            <div class="lower-content">
              <div class="icon-box"><i class="flaticon-phone-call"></i></div>
              <div class="text">Call us now for help</div>
              <h2><a href="tel:+886668880000">9978128665</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
          <div class="image-box wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
            <figure class="image"><img src="images/resource/Dog_image3.jpg" style="" alt=""></figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- welcome-section end -->


  <!-- service-section -->
  <section class="service-section sec-pad centred gray-bg">
    <div class="container">
      <div class="sec-title alternate-color">
        <div class="top-title">Our Services</div>
        <h1>What We Do</h1>
      </div>
      <div class="inner-content">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 service-column wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="service-block-one">
              <figure class=""><a href="single-service-2.html"><img src="images/resource/service-2.png" alt=""></a></figure>
              <div class="lower-content">
                <h2><a href="single-service-2.html">Regular Health Checkups</a></h2>
                <div class="text">>Our vet will assess your dog thoroughly at a check–up to look for any signs of illness or other problems.</div>
                <div class="link"><a href="single-service-2.php">Read more</a></div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="service-block-one">
              <figure class="image-box"><a href="single-service-1.html"><img src="images/resource/service-1.png" alt=""></a></figure>
              <div class="lower-content">
                <h2><a href="single-service-1.html">Pets Full<br />Grooming</a></h2>
                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                <div class="link"><a href="single-service-1.html">Read more</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="service-block-one">
              <figure class="image-box"><a href="single-service-3.html"><img src="images/resource/service-3.png" alt=""></a></figure>
              <div class="lower-content">
                <h2><a href="single-service-3.html">Styling Your<br />Pets</a></h2>
                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                <div class="link"><a href="single-service-3.html">Read more</a></div>
              </div>
            </div>
          </div>
        -->
        </div>
    <!--
    </div>
      <div class="button-box"><a href="service.html" class="theme-btn">View All Services</a></div>
    </div>
    -->
  </section>
  <!-- service-section end -->


  <!-- takecare-section -->
  <section class="takecare-section centred">
    <div class="container">
      <div class="sec-title">
        <div class="top-title">We Love Dogs</div>
        <h1>We Takecare of Dogs</h1>
      </div>
      <div class="inner-content">
        <ul class="clearfix">
          <li class="single-item wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="icon-box"><i class="flaticon-dog-1"></i></div>
            <h2><a href="#">Dog</a></h2>
            <div class="text">every pet deserves love and care.</div>
          </li>
          <!--
          <li class="single-item wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="icon-box"><i class="flaticon-cat"></i></div>
            <h2><a href="#">Cat</a></h2>
            <div class="text">Lorem ipsum simply free text in the market</div>
          </li>

          <li class="single-item wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="icon-box"><i class="flaticon-bird"></i></div>
            <h2><a href="#">Birds</a></h2>
            <div class="text">Lorem ipsum simply free text in the market</div>
          </li>
          <li class="single-item wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="icon-box"><i class="flaticon-rabbit"></i></div>
            <h2><a href="#">Rabbit</a></h2>
            <div class="text">Lorem ipsum simply free text in the market</div>
          </li>
          <li class="single-item wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
            <div class="icon-box"><i class="flaticon-fish"></i></div>
            <h2><a href="#">Fishes</a></h2>
            <div class="text">Lorem ipsum simply free text in the market</div>
          </li>
        -->
        </ul>
      </div>
    </div>
  </section>
  <!-- takecare-section end -->


  <!-- gallery-section -->
  <!--
  <section class="gallery-section">
    <div class="container-fluid">
      <ul class="gallery-carousel owl-theme owl-carousel">
        <li class="single-gallery-block">
          <figure class="image-box">
            <img src="images/gallery/gallery-1.png" alt="">
            <div class="icon-box"><a href="images/gallery/gallery-1.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
          </figure>
        </li>
        <!--
        <li class="single-gallery-block">
          <figure class="image-box">
            <img src="images/gallery/gallery-2.png" alt="">
            <div class="icon-box"><a href="images/gallery/gallery-2.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
          </figure>
        </li>
      -->
      <!--
        <li class="single-gallery-block">
          <figure class="image-box">
            <img src="images/gallery/gallery-3.png" alt="">
            <div class="icon-box"><a href="images/gallery/gallery-3.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
          </figure>
        </li>

        <li class="single-gallery-block">
          <figure class="image-box">
            <img src="images/gallery/gallery-4.png" alt="">
            <div class="icon-box"><a href="images/gallery/gallery-4.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
          </figure>
        </li>

        <li class="single-gallery-block">
          <figure class="image-box">
            <img src="images/gallery/gallery-5.png" alt="">
            <div class="icon-box"><a href="images/gallery/gallery-5.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
          </figure>
        </li>
      </ul>
    </div>
  </section>
-->
  <!-- gallery-section end -->


  <!-- team-section -->
  <!--
  <section class="team-section">
    <div class="container">
      <div class="inner-content">
        <div class="bxslider ">
          <div class="slider-content">
            <div class="row clearfix">
              <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="img-content clearfix">
                  <figure class="img-box">
                    <img src="images/resource/team-1.png" alt="">
                  </figure>
                  <div class="slider-pager">
                    <ul class="thumb-box">
                      <li>
                        <a class="active" data-slide-index="0" href="#">
                          <figure><img src="images/resource/team-thumb-1.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="1" href="#">
                          <figure><img src="images/resource/team-thumb-2.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="2" href="#">
                          <figure><img src="images/resource/team-thumb-3.png" alt=""></figure>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                  <div class="sec-title">
                    <div class="top-title">Pet Care Staff</div>
                    <h1>Meet Our Groomers</h1>
                  </div>
                  <h2><a href="#">Reena Scot</a></h2>
                  <div class="text">
                    <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                      passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  </div>
                  <ul class="info-box">
                    <li>
                      <h3>Experience:</h3> 3 years
                    </li>
                    <li>
                      <h3>Pets:</h3> dog, cat, birds
                    </li>
                  </ul>
                  <div class="bottom-content clearfix">
                    <div class="link"><a href="#" class="theme-btn">View Profile</a></div>
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
          <div class="slider-content">
            <div class="row clearfix">
              <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="img-content clearfix">
                  <figure class="img-box">
                    <img src="images/resource/team-2.png" alt="">
                  </figure>
                  <div class="slider-pager">
                    <ul class="thumb-box">
                      <li>
                        <a class="active" data-slide-index="0" href="#">
                          <figure><img src="images/resource/team-thumb-1.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="1" href="#">
                          <figure><img src="images/resource/team-thumb-2.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="2" href="#">
                          <figure><img src="images/resource/team-thumb-3.png" alt=""></figure>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                  <div class="sec-title">
                    <div class="top-title">Pet Care Staff</div>
                    <h1>Meet Our Groomers</h1>
                  </div>
                  <h2><a href="#">Sarah Eve</a></h2>
                  <div class="text">
                    <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                      passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  </div>
                  <ul class="info-box">
                    <li>
                      <h3>Experience:</h3> 3 years
                    </li>
                    <li>
                      <h3>Pets:</h3> dog, cat, birds
                    </li>
                  </ul>
                  <div class="bottom-content clearfix">
                    <div class="link"><a href="#" class="theme-btn">View Profile</a></div>
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
          <div class="slider-content">
            <div class="row clearfix">
              <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="img-content clearfix">
                  <figure class="img-box">
                    <img src="images/resource/team-3.png" alt="">
                  </figure>
                  <div class="slider-pager">
                    <ul class="thumb-box">
                      <li>
                        <a class="active" data-slide-index="0" href="#">
                          <figure><img src="images/resource/team-thumb-1.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="1" href="#">
                          <figure><img src="images/resource/team-thumb-2.png" alt=""></figure>
                        </a>
                      </li>
                      <li>
                        <a data-slide-index="2" href="#">
                          <figure><img src="images/resource/team-thumb-3.png" alt=""></figure>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                  <div class="sec-title">
                    <div class="top-title">Pet Care Staff</div>
                    <h1>Meet Our Groomers</h1>
                  </div>
                  <h2><a href="#">Mike Albert</a></h2>
                  <div class="text">
                    <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                      passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  </div>
                  <ul class="info-box">
                    <li>
                      <h3>Experience:</h3> 3 years
                    </li>
                    <li>
                      <h3>Pets:</h3> dog, cat, birds
                    </li>
                  </ul>
                  <div class="bottom-content clearfix">
                    <div class="link"><a href="#" class="theme-btn">View Profile</a></div>
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
        </div>
      </div>
    </div>
  </section>
-->
  <!-- team-section end -->


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


  <!-- about-section -->
  <section class="about-section">
    <div class="bg-column" style="background-image: url(images/background/about-bg.jpg);"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
          <div class="content-box">
            <div class="sec-title">
              <div class="top-title">About SpotDog</div>
              <h1>Few Words About</h1>
            </div>
            <div class="text">
              <p>We at SpotDog truly believe that every pet deserves love and care.SpotDog brings you a wide range of dogs looking for furever homes.We encourage audience to adopt dogs and provide them shelter,love and care.Over thousands of dogs have found homes.</p>
            </div>
            <div class="fact-counter centred">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 counter-column">
                  <div class="counter-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box">
                      <span class="count-text" data-speed="1500" data-stop="480">0</span>
                    </div>
                    <div class="text">Clients loved SpotDog services</div>
                  </div>
                </div>
                <!--
                <div class="col-lg-6 col-md-6 col-sm-12 counter-column">
                  <div class="counter-block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box">
                      <span class="count-text" data-speed="1500" data-stop="77">0</span>
                    </div>
                    <div class="text">Best professional groomer</div>
                  </div>
                </div>
              -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-section end -->


  <!-- news-section -->
  <!--
  <section class="news-section sec-pad">
    <div class="container">
      <div class="sec-title centred">
        <div class="top-title">Our Blog & News</div>
        <h1>Latest News & Articles</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 news-column">
          <div class="news-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="date">04<br />Mar</div>
            <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-1.png" alt=""></a></figure>
            <div class="lower-content">
              <ul class="info-box">
                <li>Mike Hardson</li>
                <li>3 Comments</li>
              </ul>
              <h3><a href="blog-single.html">How to take care of any kind of your pets</a></h3>
              <div class="text">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
              <div class="link"><a href="blog-single.html">Read more</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 news-column">
          <div class="news-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="date">05<br />Mar</div>
            <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-2.png" alt=""></a></figure>
            <div class="lower-content">
              <ul class="info-box">
                <li>Mike Hardson</li>
                <li>2 Comments</li>
              </ul>
              <h3><a href="blog-single.html">Shelter and feed animals that are in need</a></h3>
              <div class="text">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
              <div class="link"><a href="blog-single.html">Read more</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 news-column">
          <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="date">06<br />Mar</div>
            <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-3.png" alt=""></a></figure>
            <div class="lower-content">
              <ul class="info-box">
                <li>Mike Hardson</li>
                <li>4 Comments</li>
              </ul>
              <h3><a href="blog-single.html">Dog walking helps keep your dog sane</a></h3>
              <div class="text">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
              <div class="link"><a href="blog-single.html">Read more</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- news-section end -->


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


  <!-- contact-section -->
  <section class="contact-section centred">
    <div class="container">
      <div class="sec-title">
        <div class="top-title">Contact with Us</div>
        <h1>Make an Appointment</h1>
      </div>
      <div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 form-column">
          <div class="contact-form-area">
            <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <input type="text" name="name" placeholder="Full name" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <input type="email" name="email" placeholder="Email address" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <input type="text" name="phone" placeholder="Phone number" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <textarea name="message" placeholder="Write here message"></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                  <button type="submit" class="theme-btn">Submit request</button>
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
          <!--
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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="service.html">Services</a></li>
                  <li><a href="gallery.php">Gallery</a></li>

                  <li><a href="contact.html">Contact</a></li>
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

<!-- Mirrored from azim.commonsupport.com/Poopet/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:01:52 GMT -->

</html>
