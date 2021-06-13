

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 07:54:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('dogback.jpg');">
<div class="wrap-login100">
<form class="login100-form validate-form" action="" method="POST">
<span class="login100-form-logo">
<i class="fas fa-dog"></i>
</span>
<span class="login100-form-title p-b-34 p-t-27">
Log in
</span>
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100" data-placeholder="&#xf207;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Login
</button>
</div>
<center>
<br>
</br>
<a class="txt1" href="register.php">
New User?
</a>
<br>
</br>
<p><a class="txt1" href="#">
Forgot Password?</a>
</p>
</center>
</form>
</form>


<?php
session_start();
const login = 'admin';
const password = 'admin';
$username = filter_input(INPUT_POST, 'username');
$password = md5(filter_input(INPUT_POST, 'password'));

// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$msg='';
if (!empty($username)){
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname = "admin_side";
$_SESSION['username'] = $username;
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{

$check= "SELECT * FROM `registerationuser` WHERE username='$username' and password='$password'";
#$sql = "INSERT INTO loginuser(username,password) values ('$username','$password')";
$result = mysqli_query($conn, $check) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count==1){
	if($_GET["flag"] == 1){
		header("Location: ../adopt.php");
        exit;
	}
	else{
		echo "<script> location.href='../index.php'</script>";
	}
}
else
{
$msg='Forms not submitted';
}

$conn->close();
}
}
else{
echo $msg;
die();
}

echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
  <p>$msg</p>
</center>
</body>
</html>"
?>


</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jan 2021 07:54:51 GMT -->
</html>
