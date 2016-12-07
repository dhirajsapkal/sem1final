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

  <div class="row">
    <div class="small-12 medium-2 columns" data-sticky-container>
    	<div class="card sticky" data-sticky data-anchor="product-list" data-margin-top="4">
    		<button class="my-button" style="width: 100%; margin-bottom: 20px">Add category</button>
    		<nav class="categories" data-magellan data-options="barOffset:30;" data-active-class="link-active">
	    		<ul class="vertical menu" data-magellan>
			      <li><a href="#first" data-magellan-target="first">First Arrival</a></li>
			      <li><a href="#second" data-magellan-target="second">Second Arrival</a></li>
			      <li><a href="#third" data-magellan-target="third">Third Arrival</a></li>
			    </ul>
		    </nav>
    	</div>
    </div>
    <div class="small-12 medium-10 columns">
    	<div id="product-list">
		    <div class="card card-center" id="first">
		    	<div class="top-strip">
            <a href="#"><h2 class="card-title">Electronics</h2></a>
            <!-- <a href="#" class="card-view">View all</a> -->
          </div>
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
		    <div class="card card-center" id="second">
		    	<div class="top-strip">
            <a href="#"><h2 class="card-title">Electronics</h2></a>
            <!-- <a href="#" class="card-view">View all</a> -->
          </div>
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
		    <div class="card card-center" id="third">
		    	<div class="top-strip">
            <a href="#"><h2 class="card-title">Electronics</h2></a>
            <!-- <a href="#" class="card-view">View all</a> -->
          </div>
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
  	include 'footer.php'
  ?>




  <?php
    include 'script-scaffold.php'
  ?>

  <script src="js/slick.min.js"></script>
  <div id="destroy"></div>


  </body>
</html>
