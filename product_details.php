<?php
  session_start();
  include_once 'database.php';
  $result = mysqli_query($conn,"SELECT * FROM `dogs` WHERE id='" . $_GET['id'] . "'");
  if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $path =  'image/'.$row['filename'];
    $_SESSION['id'] = $_GET['id'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpotDog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/product_info copy.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
      <?php echo " <img data-image='red' class='active' src = '$path' alt ='".$row["breed"]." image' width='500' height='400'
	/>";?>
        <img data-image="black" src="images/black.png" alt="">
        <img data-image="blue" src="image/Hummel_Vedor_vd_Robandahoeve.jpg" alt="">
        <!-- <img data-image="red" class="active" src="<?php'$path'?>" alt="">   -->
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <!--<span>Dogs</span>-->
          <h1><?php echo $row["name"]; ?></h1>
          <h3 style="color: #999b84">Breed: <?php echo $row["breed"]; ?></h3>
          <h3 style="color: #999b84">Gender: <?php echo $row["gender"]; ?></h3>
          <p> <?php echo $row["info"]; ?></p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <!-- <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div> -->

          <!-- Cable Configuration
          <div class="cable-config">
            <span>Cable configuration</span>

            <div class="cable-choose">
              <button>Straight</button>
              <button>Coiled</button>
              <button>Long-coiled</button>
            </div>

            <a href="#">How to configurate your headphones</a>
          </div>
        </div> -->

        <!-- Product Pricing -->
        <div class="product-price">
          <!-- <span>148$</span> -->
          <a href="isLoggedin.php" class="cart-btn">Adopt</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
