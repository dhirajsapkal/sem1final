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

  <div class="reveal" id="category-modal" data-reveal>
	  <form action="" method="post">
      <input type="text" name="category">
      <input type="submit" class="my-button action-button modal-submit" value="Add">
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
	</div>

  <div class="reveal" id="image-modal" data-reveal>
    <form action="" method="post">
      <select>
        
      </select>
      <input type="text" name="url">
      <input type="submit" class="my-button action-button modal-submit" value="Add">
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
  </div>

  <div class="reveal" id="product-modal" data-reveal>
    <form id="product" action="" method="post">
      <input type="text" name="name" id="name" placeholder="Product name">
      <textarea rows="10" id="description" placeholder="About the product" name="description"></textarea>
      <input type="text" id="price" name="price" placeholder="Price">
      <button type="submit" class="my-button action-button modal-submit" id="product-submit">Add</button>
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
  </div>

  <div class="row">
    <div class="small-12 medium-2 columns" data-sticky-container>
    	<div class="card sticky" data-sticky data-anchor="product-list" data-margin-top="4">
        <button class="my-button" data-open="category-modal" style="width: 100%; margin-bottom: 20px">Add Category</button>
        <button class="my-button" data-open="product-modal" style="width: 100%; margin-bottom: 20px">Add Product</button>
        <button class="my-button" data-open="image-modal" style="width: 100%; margin-bottom: 20px">Add Images</button>
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

  <script>

    // $("#product").submit(function(event) {

      /* stop form from submitting normally */
      // event.preventDefault();

      /* get some values from elements on the page: */
      // var $form = $(this),
      //     name = $form.find('input[name="name"]').val(),
      //     description = $form.find('input[name="description"]').val(),
      //     price = $form.find('input[name="price"]').val(),
      //     url = $form.attr('action');

      /* Send the data using post */
    //   var posting = $.post( url, { name: $('#name').val(), description: $('#description').val(), price: $('#price').val() } );
    // }

    /* Put the results in a div */
    // posting.done(function( data ) {
    //   alert('success');
    // });






      // $(function() {
      //   $("#product-submit").click(function() {
      //     var name = $form.find('input[name="name"]').val(),
      //     var description = $form.find('input[name="description"]').val(),
      //     var price = $form.find('input[name="price"]').val(),
      //     // url = $form.attr('action');
      //     var dataString = 'name='+ name + '&description=' + description + '&price=' + price;
      //     alert (dataString);return false;
      //     $.ajax({
      //         url:'add.php',
      //         type:'post',
      //         data:dataString,
      //         success:function(){
      //             alert("worked");
      //         }
      //     });
      //   }
      // });





  $(document).ready(function() {

    // process the form
    // $('form').submit(function(event) {

    //   // get the form data
    //   // there are many ways to get this data using jQuery (you can use the class or id also)
    //   var formData = {
    //       'name'              : $('input[name=name]').val(),
    //       'description'             : $('#description').val(),
    //       'price'    : $('input[name=price]').val()
    //   };

    //   // process the form
    //   $.ajax({
    //       type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
    //       url         : 'add.php', // the url where we want to POST
    //       data        : formData, // our data object
    //       dataType    : 'json', // what type of data do we expect back from the server
    //                   encode          : true

          // success: function() {
          //   $('#product').html("<div id='message'></div>");
          //   $('#message').html("<h2>Product successfully added!!</h2>")
          //   .hide()
          //   .fadeIn(1500, function() {
          //     $('#message').append("<img id='checkmark' src='images/mac.jpeg' />");
          //   });
          //   .append("<p>Now go on and add some images.</p>")
          // }
    //   })
    //   // using the done promise callback
    //   .done(function(data) {

    //       // log data to the console so we can see
    //       console.log(data);

    //       // here we will handle errors and validation messages
    //   });

    //   // stop the form from submitting the normal way and refreshing the page
    //   event.preventDefault();
    // });

     // process the form
    $('form').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var formData = {
          'name'              : $('input[name=name]').val(),
          'description'             : $('#description').val(),
          'price'    : $('input[name=price]').val()
      };

      // process the form
      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'add.php', // the url where we want to POST
        data        : formData, // our data object
        // dataType    : 'json', // what type of data do we expect back from the server
        // encode          : true,
        success: function() {
          $('#product').html("<div id='product-success'></div>");
          $('#product-success').html("<h2>Product successfully added!</h2>")
          .append("<p>That's some AJAX for you</p>")
          .hide()
          .fadeIn(1500, function() {
            $('#product-success').append("<img id='checkmark' src='images/check.png' />");
          });
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

  });



    /* attach a submit handler to the form */
    // $("#formoid").submit(function(event) {

      /* stop form from submitting normally */
      // event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      // var $form = $( this ),
          // url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      // var posting = $.post( url, { name: $('#name').val(), description: $('#description').val(), price: $('#price').val() } );

      /* Alerts the results */
      // posting.done(function( data ) {
        // alert('success');
      // });
    // });
  </script>


  </body>
</html>
