<?php 
	// $sql = "SELECT product.id, name, description, price, categoryId,
	// 						   images.productId, link,
	// 				FROM product JOIN images
	// 				        WHERE images.productId = product.id";
		// WHERE DATE(TableC.date)=date(now()) ";
	// $productResult = $conn->query($sql);

	// if($productResult->num_rows > 0){
	// 	while($row_img = $productResult->fetch_assoc()){
	// 		echo '<div class="product">
	// 					  <div class="slider-image">
	// 					    <img src="img/mac.jpg">
	// 					  </div>
	// 					  <p>Title</p>
	// 					  <div class="seperator"></div>
	// 					  <div class="product-bottom">
	// 					    <h3>Price</h3>
	// 					    <button class="my-button">View</button>
	// 					  </div>
	// 					</div>';
	// 	}
	// }









	$sqlProduct = "SELECT * FROM product WHERE product.categoryId = $categoryId";

	$resultProduct = $conn->query($sqlProduct);

	if ($resultProduct->num_rows > 0) {
	  // output data of each row

		// Take product id store in variable
		// if new product id == old product id, then it's an image, otherwise it's a new product 

	  while($row = $resultProduct->fetch_assoc()) {

	  	$productId = $row['id'];
  		// $imageSQL = "SELECT * FROM images WHERE images.productId = $productId";
	  	echo $row['name'] . " | " . $row['description'] . " | " . $row['price'] .
      " | " . $row['categoryId'] . " | " . "<br>";
  		// $image_result = $conn->query($imageSQL);
  		// if($image_result->num_rows > 0){
  		// 	while($row_img = $image_result->fetch_assoc()){
		  //   }
		  // }
	  }
	}










		

?>

<!-- <div class="product">
  <div class="slider-image">
    <img src="img/mac.jpg">
  </div>
  <p>Title</p>
  <div class="seperator"></div>
  <div class="product-bottom">
    <h3>Price</h3>
    <button class="my-button">View</button>
  </div>
</div> -->

<!-- SELECT
	  product.id, name, description, price, categoryId,
	  images.productId, link,
	  categories.id as categoryId, category
		FROM product JOIN images ON product.id = product_details.product_id
		GROUP BY product.id -->