

<?php
	include 'dbcon.php';
	$productId = $_POST["productId"];
	$link = mysql_real_escape_string ($_POST["link"]);


	// echo $name . " " . $description . "" . $price;

	$sql  = "INSERT INTO images (productId, link)
	VALUES ('$productId', '$link')";

	if ($conn->query($sql) === TRUE) {
		echo 'success';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>