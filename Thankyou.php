<?php
    session_start();
    include_once 'database.php';
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>

<title>Invoice</title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
@import url(https://fonts.googleapis.com/css?family=Advent+Pro:100);
html {
  background:  url('EasygoingDog.gif') no-repeat center center fixed;
  background-size: cover;

  margin: 0;
  font-family: sans-serif;
}
h1{
  font-family: 'Advent Pro', sans-serif;
  font-size: 3em;
  margin: .2em .5em;
  color: rgba(0,0,0, 0.3);
  font-weight: bold;
}


body {
  margin: 0;
  font-family: sans-serif;
  height: 100%;
  background-color: #cccccc;
}

tex{
font-family: Tahoma, sans-serif;
}

ul {
  padding: 0;
  width: 90%;
}

li {
  display: inline;
}

a {
  outline: none;
  text-decoration: none;
  display: inline-block;
  width: 19.5%;
  margin-right: 0.625%;
  text-align: center;
  line-height: 3;
  color: black;
}

li:last-child a {
  margin-right: 0;
}

a:link, a:visited, a:focus {
  background: yellow;
}

a:hover {
  background: orange;
}

a:active {
  background: red;
  color: white;
}



px
{
background-color: font-family: Garamond
}

</style>
<body>
	<center>
    <h1>Thank you for adopting,
      <?php echo $username;?></h1>
      <tex><strong>All the details are mailed</strong> </tex>
    <br> </br>
    </center>
    <center>
    <ul>
<li><a href="index.php">Home</a></li><li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Mail</a></li>
</ul>
</center>

   </center>
<br>


</body>

</head>

</html>
