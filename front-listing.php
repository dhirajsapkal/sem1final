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
    include 'dbcon.php';
  ?>

  <div class="reveal" id="category-modal" data-reveal>
    <form id="category" action="" method="post">
      <input type="text" name="category">
      <input type="submit" class="my-button action-button modal-submit" value="Add">
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
  </div>

  <div class="reveal" id="image-modal" data-reveal>
    <form id="image" action="" method="post">
      <select name="productId">
        <?php
          $sql = "SELECT id, name FROM product";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
            }
          }
        ?>
      </select>
      <input type="text" name="link">
      <input type="submit" class="my-button action-button modal-submit" value="Add">
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
  </div>

  <div class="reveal" id="product-modal" data-reveal>
    <form id="product" action="" method="post">
      <input type="text" name="name" id="name" placeholder="Product name">
      <textarea rows="10" id="description" placeholder="About the product" name="description"></textarea>
      <input type="text" id="price" name="price" placeholder="Price">
      <select name="categoryId">
      <?php 
        $sql = "SELECT id, category FROM categories";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["id"] . "'>" . $row["category"] . "</option>";
          }
        }
      ?>
      </select>
      <button type="submit" class="my-button action-button modal-submit" id="product-submit">Add</button>
    </form>
    <button class="my-button modal-cancel" data-close aria-label="Close modal">Cancel</button>
  </div>

  <div class="row">
    <div class="small-12 medium-2 columns" data-sticky-container>
      <div class="card sticky" data-sticky data-anchor="product-list" data-margin-top="4">
        <form action="" method="post">
          <select id="price_sort">
            <option value="0">Low to high</option>
            <option value="1">High to low</option>
          </select>
          <button class="button my-button" type="submit">Go</button>
        </form>
        <nav class="categories" data-magellan data-options="barOffset:30;" data-active-class="link-active">
          <ul class="vertical menu" id="category-display" data-magellan>
            <?php
              $sql = "SELECT category FROM categories";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '<li><a href="#first" data-magellan-target="' . $row["category"] . '">' . $row["category"] . "</a></li>";
                }
              }
            ?>
          </ul>
        </nav>
      </div>
    </div>
    <div class="small-12 medium-10 columns">
      <div id="product-list">


<!--        <div class="card card-center" id="first">
          <div class="top-strip">
            <a href="#"><h2 class="card-title">Electronics</h2></a>
          </div>
          <?php
              // include 'product.php';
          ?>
        </div>  -->
      
        <?php
          $sql = "SELECT * FROM categories";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {

                $categoryId = $row['id'];
                echo '<div class="card card-center" id="first">
                        <div class="top-strip">
                          <a href="#"><h2 class="card-title">'.$row["category"].'</h2></a>
                        </div>';

                         include "product.php";




                  echo '</div>';
              }
            }

        ?>


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

    // $('#price_sort').change(function(event) {
    //     $.post('price_toggle.php', { selected: $('#price_sort').val() },
    //         function(data) {
    //             $('#priceList').html(data);
    //         }
    //     );            
    // });

    $('#category').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var categoryData = {
          'category'              : $('input[name=category]').val()
      };

      // process the form
      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'add-category.php', // the url where we want to POST
        data        : categoryData, // our data object
        // dataType    : 'json', // what type of data do we expect back from the server
        // encode          : true,
        success: function() {
          $('#category').html("<div id='category-success'></div>");
          $('#category-success').html("<h2>category successfully added!</h2>")
          .append("<p>That's some AJAX for you</p>")
          .hide()
          .fadeIn(1500, function() {
            $('#category-success').append("<img id='checkmark' src='images/check.png' />");
          });
          // $( "#category-display" ).load( "ajax/test.html" )
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

     // process the form
    $('#product').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var formData = {
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

    $('#image').submit(function(event) {

      // get the form data
      // there are many ways to get this data using jQuery (you can use the class or id also)
      var imageData = {
          'productId'              : $('select[name=productId]').val(),
          'link'             : $('input[name=link]').val()
      };

      // process the form
      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'add-image.php', // the url where we want to POST
        data        : imageData, // our data object
        // dataType    : 'json', // what type of data do we expect back from the server
        // encode          : true,
        success: function() {
          $('#image').html("<div id='Image-success'></div>");
          $('#Image-success').html("<h2>Image successfully added!</h2>")
          .append("<p>That's some AJAX for you</p>")
          .hide()
          .fadeIn(1500, function() {
            $('#image-success').append("<img id='checkmark' src='images/check.png' />");
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
  </script>


  </body>
</html>
