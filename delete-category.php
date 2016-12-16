<meta http-equiv="refresh" content="0; url=admin.php" />

<?php
	include 'dbcon.php';
	
	$category_id = $_POST['category_id'];

	$sql = "DELETE FROM categories WHERE id=$category_id";

	$result = $conn->query($sql);


	if ($conn->query($sql) === TRUE) {
        echo '
        Success';
    } else {
        echo "Failure" . $conn->error;
    }

	// echo $product_id;

?>