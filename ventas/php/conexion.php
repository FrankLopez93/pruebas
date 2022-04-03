<?php

	$servidor = "localhost";
	$usuario = "root";
	$contrasena = "";
	$bd = "ventas";
	//$port = 3306;

	$con = new mysqli($servidor, $usuario, $contrasena, $bd);

	if (!$con) {
		die("La conexión ha fallado: " . mysqli_connect_error());
	}
	

?>