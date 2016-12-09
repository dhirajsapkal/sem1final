

<?php
	include 'dbcon.php';
	$name = mysql_real_escape_string ($_POST["name"]);
	$description = mysql_real_escape_string ($_POST["description"]);
	$price = $_POST["price"];
	$category = $_POST["categoryId"];

	// echo $name . " " . $description . "" . $price;

	$sql  = "INSERT INTO product (name, description, price, categoryId)
	VALUES ('$name', '$description', '$price', '$category')";

	if ($conn->query($sql) === TRUE) {
		echo 'success';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>