<?php
require("connection.php");

$id = $_POST["value_id"];

$dni = $_POST["dni"];
$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$nacimiento = $_POST["nacimiento"];

$query = "INSERT INTO usuarios(nombre_usuario,apellido_usuario,dni_usuario,correo_usuario,direccion_usuario,fecha_nacimiento_usuario,rango,contra_usuario) VALUES ('$nombre','$apellido','$dni','$correo','$direccion','$nacimiento','3','$nombre')";

$agregarAlumno = $mysqli->query($query);

header("Location: adminAlumnos.php");
