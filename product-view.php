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

    <div class="reveal" id="category-modal" data-reveal>
      <h1>Are you sure you want to delete this product?</h1>
      <a href="delete.php?product_id='.$product_id.'"><button class="my-button action-button">Delete</button></a>
      <a href="#"><button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button></a>
    </div>


    <div class="product-view-container">
      <div class="row">
        <div class="small-12 columns">
          <div class="card">
            <div class="row">
              <div class="small-12 medium-6 columns">
                <div class="product-display">
              <?php
                $product_id = $_GET['product_id'];
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

                  
                  echo  '<h3>'.$row['name'].'</h3>'.
                        '<p>'.$row['description'].'</p>'.
                        '<h2>$ '.$row['price'].'</h2>';
                    }
                  }
                  echo '<button class="my-button action-button">Edit images</button>
                        <button class="my-button action-button">Edit content</button>
                        <a href="delete.php?product_id='.$product_id.'"><button data-open="category-modal" class="my-button action-button">Delete</button>';
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
    <div id="destroy"></div>



  </body>
</html>
