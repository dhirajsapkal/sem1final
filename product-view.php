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


    <div class="row">
      <div class="small-12 medium-6 columns">
        <div class="product-display">
          <img src="img/macbook.jpg">
          <img src="img/macbook.jpg">
          <img src="img/macbook.jpg">
          <img src="img/macbook.jpg">
          <img src="img/macbook.jpg">
        </div>
        <div class="product-nav">
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
          <img src="img/mac.jpg">
        </div>
      </div>
      <div class="small-12 medium-6 columns">
          <h1>title</h1>
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
          dots: true,
          centerMode: true,
          focusOnSelect: true
        });
    </script>
    <div id="destroy"></div>



  </body>
</html>
