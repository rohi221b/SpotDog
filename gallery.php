<?php
  session_start();
  // echo $_SESSION['username'];
  include_once 'database.php';
  // echo isset($_GET['Search']);
  // echo "HEllo";
  if (isset($_GET['Search']) && $_GET['Search'] != "" && $_GET['Search'] != " ")  {
    $breed = $_GET['Search'];
    $result = mysqli_query($conn,"SELECT * FROM `dogs` WHERE breed = '$breed'");
    if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));
      exit();
  }
  }
  else{
    $result = mysqli_query($conn,"SELECT * FROM `dogs` where adoptedby IS NULL");
  }

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Poopet/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:04:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SpotDog</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  /* background-image: url('images/search-icon.jpg'); */
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
</style>

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
                  </ul>
                -->
                </div>
              </div>
            </div>
          </div>
    </header>
    <!-- End Main Header -->


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <h1>Gallery</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="index-2.html">Homepage</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- gallery-page-section -->
    <section class="gallery-page-section centred">
      <!-- <form>
        <input type="text" name="search" placeholder="Search..">
      </form> -->
      <form method="GET" action="" name="Search" style="margin-bottom: 20px;">
		    <input type="text" name="Search" placeholder="Search.."><br>
      </form>

        <div class="container">
            <div class="row">
                <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                        $path =  'Admin/demo1/image/'.$row['filename'];
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-gallery-block">

                        <figure class="image-box">
                            <a href="product_details.php?id=<?php echo $row['id']; ?>"><img src=<?php echo $path?> width="500" height="200"></a>
                        </figure>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-gallery-block">
                        <figure class="image-box">
                            <a href="index.php?id=<?php echo $row['id']; ?>"><img src=<?php echo $path?>></a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="single-gallery-block">
                        <figure class="image-box">
                            <a href="index.php?id=<?php echo $row['id']; ?>"><img src=<?php echo $path?>></a>
                        </figure>
                    </div>
                </div> -->

                <?php
                    $i++;
                }
                ?>
            </div>
            <div class="link"><a href="#" class="theme-btn">Load More</a></div>
        </div>
    </section>
    <!-- gallery-page-section -->


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

                </div>
            </div>
        </div>
        <div class="footer-bottom centred black-bg">
            <div class="container">
                <div class="copyright">&copy; SpotDog 2019. All rights reserved.</div>
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

<!-- Mirrored from azim.commonsupport.com/Poopet/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 12:05:07 GMT -->
</html>
