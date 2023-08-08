<?php
session_start();
require("connection.php");

$idUsuario = $_POST["id_value"];
$dni_nuevo = $_POST["matricula"];
$correo = $_POST["email"];
$contra = $_POST["contra"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$fecha = $_POST["nacimiento"];

var_dump($idUsuario);
var_dump($dni_nuevo);
var_dump($correo);
var_dump($contra);
var_dump($nombre);
var_dump($apellido);
var_dump($direccion);
var_dump($fecha);


$query = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_usuario='$apellido',dni_usuario='$dni_nuevo',correo_usuario='$correo',direccion_usuario='$direccion',fecha_nacimiento_usuario='$fecha'  WHERE id_usuario = '$idUsuario'; ";
$agregar = $mysqli->query($query);

if ($_SESSION["data"]["rango"] === "1") {
    header("Location: adminDashboard.php");
} else if ($_SESSION["data"]["rango"] === "2") {
    header("Location: maestroDashboard.php");
} else if ($_SESSION["data"]["rango"] === "3") {
    header("Location: alumnoDashboard.php");
}
