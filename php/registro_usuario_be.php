<?php 

//Creando variables:

$nombres  = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$tipo  = $_POST['tipo'];
$no_documento  = $_POST['nodocumento'];
$correo_electronico  = $_POST['correoelectronico'];
$fechadenacimiento  = $_POST['fechadenacimiento'];
$residencia  = $_POST['ciudad'];
$contrasena  = $_POST['contrasena'];

$query = "INSERT INTO registro(nombres, apellidos, tipo, no_documento, correo_electronico, fecha_nacimiento, lugar_residencia, contrasena)
        VALUES('$nombres', '$apellidos', '$tipo', '$no_documento', '$correo_electronico', '$fechadenacimiento', '$residencia', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);


?>
