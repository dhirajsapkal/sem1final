

<?php
	include 'dbcon.php';
	$name = mysql_real_escape_string ($_POST["name"]);
	$description = mysql_real_escape_string ($_POST["description"]);
	$price = $_POST["price"];

	// echo $name . " " . $description . "" . $price;

	$sql  = "INSERT INTO product (name, description, price)
	VALUES ('$name', '$description', '$price')";

	if ($conn->query($sql) === TRUE) {
		echo 'success';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>