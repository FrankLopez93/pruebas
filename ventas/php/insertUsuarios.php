<?php
    require("conexion.php");
    $con = mysqli_connect($servidor, $usuario, $contrasena, $bd);


    $nombre = $_POST["nombre"];
    $apPaterno = $_POST["apPaterno"];
    $apMaterno = $_POST["apMaterno"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $rol = $_POST["rol"];

    $sql = "INSERT INTO usuarios (nombre, ap_paterno, ap_materno, email, celular, id_rol)
            VALUES('$nombre', '$apPaterno', '$apMaterno', '$email', '$celular', '$rol')";
    
    if (mysqli_query($con, $sql) === TRUE) {
        echo "Registro realizado";
    }else {
        echo "ERROR!!!";
    }

?>