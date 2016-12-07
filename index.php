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
      <div class="hero">
        <div class="small-12 medium-12 columns">
          <img src="img/macbook.jpg">
        </div>
        <div class="small-12 large-4 medium-6 medium-offset-4 end columns">
          <div class="hero-transform">
            <h2>15” MACBOOK PRO</h2>
            <p>It’s faster and more powerful than before, yet remarkably thinner and lighter. It has the brightest, most colorful Mac notebook display ever. And it introduces the Touch Bar</p>
            <button class="my-button action-button"><span>Starting at $1,299</span></button>
          </div>
        </div>
      </div>
    </div>
      

      
    <div class="row">
      <div class="small-12 columns">
        <div class="card">
          <div class="top-strip">
            <a href="#"><h2 class="card-title">Electronics</h2></a>
            <a href="#" class="card-view">View all</a>
          </div>
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
          <div class="slider-buttons">
            <button type="button" class="my-button slider-previous"><img src="img/previous.png"></button>
            <button type="button" class="my-button slider-next"><img src="img/next.png"></button>
          </div>
        </div>
      </div>
    </div>


    <?php
      include 'footer.php';
    ?>



    <?php
      include 'script-scaffold.php'
    ?>

    <script src="js/slick.min.js"></script>
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
