<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "dbhiltongarden");
$sql = "DELETE FROM users WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>