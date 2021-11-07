<?php

	//session_start();

 // obteniendo usuario

	$estado = false; // booleana

	if (isset($_SESSION['username'])) {
		$estado = true;
	}
?>