<?php
require("conexion.php");
$con = mysqli_connect($servidor, $usuario, $contrasena, $bd);

$sql = "SELECT id, rol FROM roles";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<option value='0'>Selecccionar</option>";
    while(($row = mysqli_fetch_array($result)) != null) {
        echo "<option value='". $row["id"] ."'>". $row["rol"] ."</option>";
    }
}else{
    echo "<option value='0'>Sin registro</option>";
}




?>