

<?php
	include 'dbcon.php';
	$productId = $_POST["productId"];
	$url = mysql_real_escape_string ($_POST["url"]);


	// echo $name . " " . $description . "" . $price;

	$sql  = "INSERT INTO images (productId, link)
	VALUES ('$productId', '$link')";

	if ($conn->query($sql) === TRUE) {
		echo 'success';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>