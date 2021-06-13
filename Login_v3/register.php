<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="minn.css">

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
Register
</span>
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100" data-placeholder="&#xf207;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="confirmpass" placeholder="Confirm Password">
<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<div class="container-login100-form-btn">
<button class="login100-form-btn" name="submit" value="submit" type="submit">
Submit
</button>


</div>
<div class="text-center p-t-90">
</div>.
</form>
<?php
session_start();
$username = filter_input(INPUT_POST, 'username');
$password = md5(filter_input(INPUT_POST, 'password'));
$confirmpass=md5(filter_input(INPUT_POST,'confirmpass'));

$msg='';

if($password!=$confirmpass)
{

$msg="please correct your password";
}

else{
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
$sql = "INSERT INTO registerationuser(username,password,confirmpass) values ('$username','$password','$confirmpass')";
if ($conn->query($sql)){
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
 echo "<script> location.href='login.php'</script>";
}
else{
$msg='Please choose different username';
}
$conn->close();
}
}
else{
echo $msg;
die();
}


}

echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
  <h>$msg</h>
</center>
</body>
</html>";

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
</html>
