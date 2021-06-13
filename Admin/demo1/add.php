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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script
	 src="https://kit.fontawesome.com/64d58efce2.js"
	 crossorigin="anonymous"
 ></script>
<link rel="stylesheet" type= "text/css" href ="admin_add.css"/>
<link rel="stylesheet" href="formStyle.css">
<link rel="stylesheet" href="add1.css">
<style media="screen">
body {
 /* background-image: url("https://wonderfulengineering.com/wp-content/uploads/2016/03/Water-wallpaper-12.jpg"); */
 /* background-color: #cccccc; */
 background-repeat: no-repeat;
   background-size: cover;
	 background-position: center;
}

.navbar{
  background: #000 !important;
  padding-top: 5px !important;
  padding-bottom: 5px !important;
  padding-left:  20px !important;
  padding-right:20px !important;
  z-index: 10 !important;
}
.nav-link{
  color:#fff !important;
  padding-right: 20px !important;
  padding-left: 20px !important;
  font-size: 20px !important;
}
.navbar-brand img{
  height:auto;
  weight:auto;
  max-height: 40px;
  max-width: 40px;
  float:left !important;
	align-items:center;

}
.a {
	color:#fff !important;
  padding-right: 20px !important;
  font-size: 23px !important;
}
.adi3{
	padding-left: 105px;
}
.adi2{
	font-size: 20px !important;
}
.adi{
	/* color: black !important; */
	background-color: black !important;
	body{
		margin:0;
		padding:0;
		/*background-image: url("https://wonderfulengineering.com/wp-content/uploads/2016/03/Water-wallpaper-12.jpg");

		/* background-repeat: no-repeat;
	     background-size: cover;
	     background-position: center;*/

		 /*background-color: #cccccc;*/
		 background-color: #fff;
	}
	#content{
		position:absolute;
		top:0;
		left:40%;
	    padding-top: 3%;

	}
	.form-group{
		padding:1%;
		font-size:20px;
	}

	.sub{
		te
		margin-top:0;
	}
	.nav-link{
		font-size:14px;
		/*margin-left:2%;
		text-align: right;*/
	}
}
</style>
</head>


<body>
	<nav class="navbar navbar-expand-lg" id="navbar">
	<a class="navbar-brand" href="#"><img src="image/fin_fin.png"><a class="a">Spotdog</a></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="display.php">Display Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Add Record</a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="adopted.php">Adopted Record</a>
          </li>
					<li class="nav-item">
					<a class="nav-link" href="login.php">Log-In</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	<div class="navbar-nav">
	     <a class="nav-link active" aria-current="page" href="display.php">Spotdog</a>
	     <a class="nav-link" href="add.php">Add New Record</a>
	     <a class="nav-link" href="adopted.php">Adapted Record</a>
	   </div>
	 </div>
	   </nav> -->
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<div class="forms-container" id="content">

<!-- <form method="POST" action="" enctype="multipart/form-data">
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
	<input  type="file" name="uploadfile" accept="image/*" onchange="loadFile(event)" value=""/><br>
	</div>



	<div class="form-group">
		<label for="message">Message:</label><br>
		<textarea name="info" id="info" cols="30" rows="10"></textarea>
	</div>



	<div class="form-group">
		<button type="submit" class="btn btn-primary adi" name="upload">Submit</button>
	</div>
</form> -->
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


	<!-- <img id="output" width='500' height='300'/> -->
	<label for="gender">Upload image:</label><br>
	<input class="btn btn-primary adi" type="file" name="uploadfile" accept="image/*" onchange="loadFile(event)" value=""/><br>
	</div>
	<!-- <div class="form-group"> -->
	<!-- <label for="gender">Upload image:</label><br> -->
	<!-- <input type="file" name="uploadfile" value=""/><br> -->
	<!-- </div> -->



	<div class="form-group">
		<label for="message">Message:</label><br>
		<textarea name="info" id="info" cols="30" rows="3"></textarea>
	</div>



	<div class="form-group adi3">
		<button type="submit" class="btn adi adi2 btn-primary sub" name="upload">Submit</button>
	</div>
</form>
</div>
</body>
</html>
