<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM `dogs` WHERE `adoptedby` IS NOT NULL");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Adopted</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stocks</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <style>

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;

        }

        tr:nth-child(even) {
            background-color: white;
        }

        #btn{
            display: flex;
            margin: auto;
            background-color: #e7e7e7;
            font-size: 20px;
            padding: 14px 40px;
            border-radius: 8px;
            color: black;
            border: 2px solid #080808;
            margin-bottom: 10px;

        }

        #showdata{
            display: flex;
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

    </style>
</head>
<body>
<!-- <button onclick="location.href='add.php'" id="btn">Add New Record</button> -->
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
<div class="container" id="showdata">
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class="table">
  <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Breed</th>
    <th scope="col">Gender</th>
    <th scope="col">Img</th>
    <th scope="col">Info</th>
    <th scope="col">Adopted By</th>
  </tr>
</thead>
<tbody>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    $path =  'image/'.$row['filename'];

?>
<tr>
    <th scope="row"><?php echo $row["id"]; ?></th>
    <th><?php echo $row["name"]; ?></th>
    <th><?php echo $row["breed"]; ?></th>
    <th><?php echo $row["gender"]; ?></th>
    <th><?php echo "<img src = '$path' alt ='".$row["breed"]." image' width='500' height='300' />"; ?></th>
    <th><?php echo $row["info"]; ?></th>
    <th><?php echo $row["adoptedby"]; ?></th>
    <!-- <td><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td> -->
    <!-- <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td> -->

</tr>
<?php
$i++;
}
?>
</tbody>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
