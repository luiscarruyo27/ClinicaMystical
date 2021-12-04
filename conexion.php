<?php 
$servidor = "localhost";
$nombreusuario = "id18060726_clinicamys";
$password = "%wsi0Kej>4^L[l9b";
$db = "id18060726_clinica";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);

}

?>