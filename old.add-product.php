<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php
      include 'head-scaffold.php'
    ?>
  </head>
  <body>

    
  <?php
    include 'navbar.php';
  ?>

  <?php
    include 'dbcon.php';

    if (isset($_POST['submit'])) {
      $name = mysql_real_escape_string ($_POST["name"]);
      $description = mysql_real_escape_string ($_POST["description"]);
      $price = $_POST["price"];

      // echo $name . " " . $description . "" . $price;

      $sql  = "INSERT INTO product (name, description, price)
      VALUES ('$name', '$description', '$price')";

      if ($conn->query($sql) === TRUE) { 
       echo 'success';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

  ?>

  <div class="reveal" id="exampleModal1" data-reveal>
    <h1>Enter the image URL</h1>
    <input type="text" name="image-url" placeholder="Paste the image link here">
    <button class="my-button action-button">Add image</button>
    <button class="my-button" class="close-button" data-close aria-label="Close modal">Cancel</button>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>


  <div class="product-view-container">
    <div class="row">
      <div class="small-12 medium-6 columns">
        <div class="add-product-image">

        </div>
        <div class="added-product-images">
          <button class="my-button big-square-button" data-open="exampleModal1">Add Image</button>
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
        </div>
      </div>
      <div class="small-12 medium-6 columns">
        <form action="" method="post">
          <input type="text" name="name" placeholder="Product name">
          <textarea rows="10" placeholder="About the product" name="description"></textarea>
          <input type="text" name="price" placeholder="Price">
          <input type="submit" class="my-button action-button">
          <button class="my-button">Cancel</button>
        </form>
        <?php
          // if (isset($_POST['submit'])) {
          //   $name = mysql_real_escape_string ($_POST["name"]);
          //   $description = mysql_real_escape_string ($_POST["description"]);
          //   $price = $_POST["price"];

          //   // echo $name . " " . $description . "" . $price;

          //   $sql  = "INSERT INTO product (name, description, price)
          //   VALUES ('$name', '$description', '$price')";

          //   if ($conn->query($sql) === TRUE) {
          //     echo '
          //     <div class="success callout green-toast" data-closable="slide-out-right">
          //       <h5>Product sucessfully added</h5>
          //       <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
          //         <span aria-hidden="true">&times;</span>
          //       </button>
          //     </div>
          //     ';
          //   } 
          //   else 
          //   {
          //     echo "Error: " . $sql . "<br>" . $conn->error;
          //   }

          // }
          // else {
          //   echo '<form action="" method="post">
          //           <input type="text" name="name" placeholder="Product name">
          //           <textarea rows="10" placeholder="About the product" name="description"></textarea>
          //           <input type="text" name="price" placeholder="Price">
          //           <input type="submit" class="my-button action-button">
          //           <button class="my-button">Cancel</button>
          //         </form>';
          // }
        ?>
      </div>
    </div>









    <?php
      include 'script-scaffold.php'
    ?>

  </body>