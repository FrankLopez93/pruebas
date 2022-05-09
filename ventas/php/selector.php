<?php
require("conexion.php");
$con = mysqli_connect($servidor, $usuario, $contrasena, $bd);

$sql = "SELECT id, CONCAT(nombre, ' ' , ap_paterno, ' ', ap_materno) AS Nombre
        FROM usuarios
        ORDER BY Nombre";

$result = mysqli_query($con, $sql);
if ($result) {
    //echo "<option value='0'>Seleccionar</option>";
    while (($row = mysqli_fetch_array($result)) != null) {
        //echo "<option value='". $row["id"] ."'>". $row["Nombre"] ."</option>";
        echo "<option value='". $row["Nombre"] ."'>";
    }
}else{
    echo "<option value='0'>Sin registros</option>";
}



?>