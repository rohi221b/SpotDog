<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$areacode= filter_input(INPUT_POST, 'areacode');
$email = filter_input(INPUT_POST, 'email');
$stradrr1 = filter_input(INPUT_POST, 'stradrr1');
$city=filter_input(INPUT_POST, 'city');
$state=filter_input(INPUT_POST,'state');
$zip=filter_input(INPUT_POST,'zip');
$date=filter_input(INPUT_POST,'date');
$hours=filter_input(INPUT_POST,'hours');
$min=filter_input(INPUT_POST,'min');
$brief=filter_input(INPUT_POST,'brief');
$notify=filter_input(INPUT_POST,'notify');

$msg='';
if (!empty($firstname)){
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname = "admin_side";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO adoption(firstname,lastname,areacode,email,stradrr1,city,state,zip,date,hours,min,brief,notify) values ('$firstname','$lastname','$areacode','$email','$stradrr1','$city','$state','$zip','$date','$hours','$min','$brief','$notify')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
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