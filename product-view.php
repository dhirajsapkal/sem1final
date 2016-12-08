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
          <h1>Macbook pro 13' w/o touch bar</h1>
          <p>2.7 GHz Dual-Core Intel Core i5 Processor (Turbo Boost up to 3.1 GHz, 3 MB shared L3 cache)
          8 GB 1866 MHz DDR3L RAM; 128 GB PCIe-based Flash Storage
          13.3-inch IPS Retina Display, 2560-by-1600 resolution
          Intel Iris Graphics, Force Touch Trackpad
          OS X Yosemite, Up to 9 Hours of Battery Life</p>
          <h2>$1,499</h2>
          <button class="my-button action-button">Buy now</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <div class="card">
          <div class="product-slider">
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
            <?php
              include 'product.php';
            ?>
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
