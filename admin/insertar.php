<?php
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$n1 = $_POST['n1'];
$p1 = md5($_POST['p1']);
$cnx = mysqli_connect("localhost", "root", "", "dbhiltongarden");
$sql = "INSERT INTO users (username, email, password, cargo) VALUES ('$nom', '$ape', '$p1', '$n1')";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>