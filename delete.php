<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<?php 
include 'config.php';
?>
<?php  
$sql = "DELETE FROM users WHERE id=".$_SESSION['id'];
$result = mysqli_query($conn, $sql);

         if($result)
         {
            echo "<strong>El registro se ha eliminado con exito</strong>.<br>";
         	session_destroy();
            header("Location: index.php");
         }
         else
         {
            echo "Hubo un problema borrando el registro.";
            header("Location: welcome.php");
    
         }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

</body>
</html>