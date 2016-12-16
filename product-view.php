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
    ?>

    <?php $product_id = $_GET['product_id'];
      $sql = "SELECT *FROM product WHERE product.id = $product_id ";
      $result = $conn->query($sql);

    ?>

    <div class="reveal" id="delete-modal" data-reveal>
      <p class="modal-large">Are you sure you want to delete this product?</p>
      <form id="delete" action="" method="post">
        <?php 
        echo '<input type="hidden" name="product_id" value="'.$product_id.'">';
        ?>
        <button type="submit" class="my-button action-button">Delete</button>
      </form>
      <button class="my-button" data-close aria-label="Close modal">Cancel</button>
    </div>


    <div class="reveal" id="success-modal" data-reveal>
      <p class="modal-large">Success!!!</p>
      <p>Your changes were sucessfully saved to the database</p>
      <a href="#"><button class="my-button action-button" data-close aria-label="Close modal">Done</button></a>
    </div>

    <div class="reveal" id="product-modal" data-reveal>
      <form id="product_update" action="" method="post">
        <?php 
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<input type="hidden" name="product_id" value="'.$row['id'].'"><input type="text" name="name" id="name" placeholder="Enter the name of the product 
              (Required)" value="'.$row['name'].'" required>
              <textarea rows="10" id="description" placeholder="Tell us something about the product" name="description">'.$row['description'].'</textarea>
              <input type="text" id="price" value="'.$row['price'].'" name="price" placeholder="Price (Required)" required>
              <select name="categoryId">';
              $sql_cat = "SELECT id, category FROM categories";
              $result_cat = $conn->query($sql_cat);

              if ($result_cat->num_rows > 0) {
                while($row_cat = $result_cat->fetch_assoc()) {
                  if($row_cat['id']==$row['categoryId']) {
                    echo "<option selected value='" . $row_cat["id"] . "'>" . $row_cat["category"] . "</option>";
                  }
                  else
                  {
                    echo "<option value='" . $row_cat["id"] . "'>" . $row_cat["category"] . "</option>";

                  }
                }
              }
            }
          }
          

        ?>
        </select>
        <button type="submit" class="my-button action-button modal-submit" id="product-submit">Update</button>
      </form>
      <<button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
    </div>


    <div class="product-view-container">
      <div class="row">
        <div class="small-12 columns">
          <div class="card card-padding">
            <div class="row">
              <div class="small-12 medium-6 columns">
                <div class="product-display">
              <?php
                $sql = "SELECT *FROM product WHERE product.id = $product_id ";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) { 
                    // $product_id = $row['id'];
                    $imageSQL = "SELECT * FROM images WHERE images.productId = $product_id";
                    $image_result = $conn->query($imageSQL);
                    if($image_result->num_rows > 0){
                      while($row_img = $image_result->fetch_assoc()){
                        echo '<img src="'.$row_img['link'].'">';
                      }
                    }
                    echo '</div>
                              <div class="product-nav">';
                    $imageSQL = "SELECT * FROM images WHERE images.productId = $product_id";
                    $image_result = $conn->query($imageSQL);
                    if($image_result->num_rows > 0){
                      while($row_img = $image_result->fetch_assoc()){
                        echo '<img src="'.$row_img['link'].'">';
                      }
                    }
                    echo          '</div>
                            </div>
                            <div class="small-12 medium-6 columns">';

                  
                  echo  '<p class="card-large">'.$row['name'].'</p>'.
                        '<p>'.$row['description'].'</p>'.
                        '<p class="card-price">$ '.$row['price'].'</p>';
                    }
                  }
                  // echo '<button class="my-button action-button">Edit images</button>
                  //       <button class="my-button action-button">Edit content</button>
                  //       <a href="delete.php?product_id='.$product_id.'"><button data-open="delete-modal" class="my-button action-button">Delete</button>';
                  echo '<button data-open="product-modal" class="my-button">Edit content</button>
                        <button data-open="delete-modal" class="my-button action-button">Delete</button>';
                ?>
                
                
                
              <!-- </div> -->
            </div>
          </div>
        
        </div>
      </div>
    </div>






    <?php
      include 'script-scaffold.php'
    ?>

    <script src="js/slick.min.js"></script>
    <script>
       $('.product-display').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.product-nav'
        });
        $('.product-nav').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.product-display',
          dots: false,
          centerMode: true,
          focusOnSelect: true
        });
    </script>
    <script>
      $('.product-slider').slick({
        // arrows: true,
        mobileFirst: true,
        slidesToShow: 5,
        focusOnSelect: false,
        dots: false,
        prevArrow: true,
        nextArrow: true,

        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }]
      });
    </script>
    <script>
      $('#delete').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var deleteData = {
          'product_id'              : $('input[name=product_id]').val()
      };

      // process the form
      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'delete.php', // the url where we want to POST
        data        : deleteData, // our data object
        // dataType    : 'json', // what type of data do we expect back from the server
        // encode          : true,
        success: function() {

          // $('#delete-modal').foundation('close');
          // $('#success-modal').foundation('open');
           window.location="admin.php";
        }
      })
      // return false;
          // using the done promise callback
          .done(function(data) {

              // log data to the console so we can see
              console.log(data); 

              // here we will handle errors and validation messages
          });

      // stop the form from submitting the normal way and refreshing the page
      event.preventDefault();
    });

    $('#product_update').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var formData = {
          'product_id'              : $('input[name=product_id]').val(),
          'name'              : $('input[name=name]').val(),
          'description'             : $('#description').val(),
          'price'    : $('input[name=price]').val(),
          'categoryId' : $('select[name=categoryId]').val()
      };

      // process the form
      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'add.php', // the url where we want to POST
        data        : formData, // our data object
        // dataType    : 'json', // what type of data do we expect back from the server
        // encode          : true,
        success: function() {

          $('#product-modal').foundation('close');
          $('#success-modal').foundation('open');
        }
      })
      // return false;
          // using the done promise callback
          .done(function(data) {

              // log data to the console so we can see
              console.log(data); 

              // here we will handle errors and validation messages
          });

      // stop the form from submitting the normal way and refreshing the page
      event.preventDefault();
    });
    </script>
    <div id="destroy"></div>



  </body>
</html>
