<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM `dogs` WHERE `adoptedby` IS NOT NULL");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Adopted</title>
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

    </style>
</head>
<body>
<button onclick="location.href='add.php'" id="btn">Add New Record</button>
<div id="showdata">
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>  
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>Breed</td>
    <td>Gender</td>
    <td>Img</td>
    <td>Info</td>
    <td>Adopted By</td>
  </tr>
<?php
$i=0; 
while($row = mysqli_fetch_array($result)) {
    $path =  'image/'.$row['filename'];

?>
<tr> 
    <td><?php echo $row["id"]; ?></td>    
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["breed"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo "<img src = '$path' alt ='".$row["breed"]." image' width='500' height='300' />"; ?></td>
    <td><?php echo $row["info"]; ?></td>
    <td><?php echo $row["adoptedby"]; ?></td>
    <!-- <td><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td> -->
    <!-- <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td> -->
     
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>

</body>
</html>