<?php
$response = array();
include_once 'database.php';


$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "image/".$filename;
	$name = $_POST["name"];
	$breed = $_POST["breed"];
	$gender = $_POST["gender"];
	$info = $_POST["info"];




	$sql = "INSERT INTO `dogs` (`filename` , `name` , `breed` , `gender`, `info`) VALUES  ('$filename' , '$name' ,'$breed' ,'$gender' ,'$info') ";
	$result = $conn->query($sql);
	if($result)
	{
		$response['error'] = false;
		$response['message'] = "Record Added";
		header("Location: display.php");
	}
	else
	{
		$response['error'] = true;
		$response['message'] = "Record Insertion Failed";
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	if (move_uploaded_file($tempname, $folder)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "Failed to upload image";
	}
}
	// $result = mysqli_query($db, "SELECT * FROM image");
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="css/admin_add.css"/>
<link rel="stylesheet" href="css/formStyle.css">
</head>


<body>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<div class="form-group">
		<label for="name">Name:</label><br>
		<input type="text" name="name" placeholder="Name"><br>
	</div>

	<div class="form-group">
		<label for="breed">Breed:</label><br>
		<input type="text" name="breed" placeholder="Breed"><br>
	</div>

	<div class="form-group">
		<label for="gender">Gender:</label><br>
		<input type="radio" id="male" name="gender" value="male">
  		<label for="male">Male</label><br>
  		<input type="radio" id="female" name="gender" value="female">
  		<label for="female">Female</label><br>
	</div>

	<div class="form-group" style="flex-direction: column;">


	<img id="output" width='500' height='300'/>
	<label for="gender">Upload image:</label><br>
	<input type="file" name="uploadfile" accept="image/*" onchange="loadFile(event)" value=""/><br>
	</div>
	<!-- <div class="form-group"> -->
	<!-- <label for="gender">Upload image:</label><br> -->
	<!-- <input type="file" name="uploadfile" value=""/><br> -->
	<!-- </div> -->



	<div class="form-group">
		<label for="message">Message:</label><br>
		<textarea name="info" id="info" cols="30" rows="10"></textarea>
	</div>



	<div class="form-group">
		<button type="submit" name="upload">Submit</button>
	</div>
</form>
</div>
</body>
</html>
