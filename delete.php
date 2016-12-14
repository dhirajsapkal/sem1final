<?php
	include 'dbcon.php';
	
	$product_id = $_GET['product_id'];

	$sql = "DELETE FROM product WHERE id=$product_id";

	$result = $conn->query($sql);


	if ($conn->query($sql) === TRUE) {
        echo '
        Success';
    } else {
        echo "Failure" . $conn->error;
    }

	// echo $product_id;

?>