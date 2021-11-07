<?php
	require_once ("config.php");
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3><?php 
		echo $result[id];
		?> 
	</h3>
	<h3><?php 
		echo $result[descripcion];
		?> 
	</h3>
</body>
</html>