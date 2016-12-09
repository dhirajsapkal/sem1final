

<?php
	include 'dbcon.php';
	$category = mysql_real_escape_string ($_POST["category"]);

	// echo $name . " " . $description . "" . $price;

	$sql  = "INSERT INTO categories (category)
	VALUES ('$category')";

	if ($conn->query($sql) === TRUE) {
		echo 'success';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>