<?php
	include_once 'database.php';

	$result = mysqli_query($conn,"SELECT * FROM dogs WHERE id='" . $_GET['id'] . "'");
	$row= mysqli_fetch_array($result);
	$path =  'image/'.$row['filename'];

    if (isset($_POST['upload'])) {

        $filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;

		if(count($_POST)>0 && isset($_POST['gender']) &&
		(file_exists($_FILES['uploadfile']['tmp_name']) ||
		is_uploaded_file($_FILES['uploadfile']['tmp_name']))) {
			mysqli_query($conn,"UPDATE dogs
			set filename='" . $filename . "', name='" . $_POST['name'] . "', breed='" . $_POST['breed'] . "' ,gender='" . $_POST['gender'] . "' ,info='" . $_POST['info'] . "'
			WHERE id='" . $_GET['id'] . "' ");
			$message = "Record Modified Successfully";
			header("Location: display.php");
		}
		else if(count($_POST)>0 && !isset($_POST['gender']) &&
		!(file_exists($_FILES['uploadfile']['tmp_name']) ||
		is_uploaded_file($_FILES['uploadfile']['tmp_name']))) {
			mysqli_query($conn,"UPDATE dogs
			set  name='" . $_POST['name'] . "', breed='" . $_POST['breed'] . "' ,info='" . $_POST['info'] . "'
			WHERE id='" . $_GET['id'] . "' ");
			$message = "Record Modified Successfully";
			header("Location: display.php");
		}
		else if(count($_POST)>0 && isset($_POST['gender']) &&
		!(file_exists($_FILES['uploadfile']['tmp_name']) ||
		is_uploaded_file($_FILES['uploadfile']['tmp_name']))) {
			mysqli_query($conn,"UPDATE dogs
			set   name='" . $_POST['name'] . "', breed='" . $_POST['breed'] . "' ,gender='" . $_POST['gender'] . "' ,info='" . $_POST['info'] . "'
			WHERE id='" . $_GET['id'] . "' ");
			$message = "Record Modified Successfully";
			header("Location: display.php");
		}
		else if(count($_POST)>0 && !isset($_POST['gender']) &&
		(file_exists($_FILES['uploadfile']['tmp_name']) ||
		 is_uploaded_file($_FILES['uploadfile']['tmp_name']))) {
			mysqli_query($conn,"UPDATE dogs
			set filename='" . $filename . "', name='" . $_POST['name'] . "', breed='" . $_POST['breed'] . "' , info='" . $_POST['info'] . "'
			WHERE id='" . $_GET['id'] . "' ");
			$message = "Record Modified Successfully";
			header("Location: display.php");
		}



		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
			}
		else{
			$msg = "Failed to upload image";
		}
	}
?>

<html>
<head>
<title>Update Employee Data</title>
<link rel="stylesheet" href="formStyle.css">
</head>
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

<form method="POST" action="" enctype="multipart/form-data" >
	<div class="form-group">
		<label for="name">Name:</label><br>
		<input type="text" name="name" placeholder="Name" value="<?php echo $row['name']?>"><br>
	</div>

	<div class="form-group">
		<label for="breed">Breed:</label><br>
		<input type="text" name="breed" placeholder="Breed" value="<?php echo $row['breed']; ?>"><br>
	</div>

	<div class="form-group">
		<label for="gender">Gender:</label><br>
		<input type="radio" id="male" name="gender" value="male">
  		<label for="male">Male</label><br>
  		<input type="radio" id="female" name="gender" value="female">
  		<label for="female">Female</label><br>
	</div>

	<div class="form-group" style="flex-direction: column;">

	<?php echo "<img src = '$path' alt ='".$row["breed"]."image' width='500' height='300' id='output'
	/>";?>
	<label for="gender">Upload image:</label><br>
	<input type="file" name="uploadfile" accept="image/*" onchange="loadFile(event)" value="Ro"/><br>
	</div>



	<div class="form-group">
		<label for="message">Message:</label><br>
		<textarea name="info" id="info" cols="30" rows="10" ><?php echo $row["info"]; ?></textarea>
	</div>



	<div class="form-group">
		<button type="submit" name="upload">Submit</button>
	</div>

    <div class="form-group" style="padding-bottom:5px;">
            <a href="display.php">Product List</a>
    </div>
<body>
</form>
</div>
</body>
</html>
