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


    <div class="product-view-container">
      <div class="row">
        <div class="small-12 medium-6 columns">
        <?php 
            $product_id = $_GET['product_id'];
          echo '<div class="product-display">
                  <img src="img/macbook.jpg">
                </div>
                <div class="product-nav">
                  <img src="img/mac.jpg">
                </div>
              </div>
              <div class="small-12 medium-6 columns">';

            $sql = "SELECT *FROM product WHERE product.id = $product_id ";
            $result = $conn->query($sql); 
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<h1>'.$row['name'].'</h1>'.
                      '<p>'.$row['description'].'</p>'.
                      '<h2>'.$row['price'].'</h2>';
              }
            }
          ?>
          
          
          <button class="my-button action-button">Buy now</button>
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
