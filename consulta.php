<?php
	require_once ("./login/config.php");
	$registros = $conn->query("SELECT * FROM users INNER JOIN cargo ON users.cargo = cargo.id_cargo;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>
<?php  
while ($user = mysqli_fetch_array($registros)){ ?>

 <tr>
		<td><?php echo $user["id"]; ?> </td>
		<td><?php echo "-"; ?> </td> 
		<td><?php echo $user["cargo"]; ?> </td>
		<td> <br> </td>

</tr>
<?php } ?>

	</h3>

	</h3>
</body>
</html>