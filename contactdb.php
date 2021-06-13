<?php
$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
$phoneno= filter_input(INPUT_POST, 'phoneno');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if (!empty($Name)){
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
$sql = "INSERT INTO contact(Name,Email,phoneno,subject,message)
values ('$Name','$Email','$phoneno','$subject','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
?>
