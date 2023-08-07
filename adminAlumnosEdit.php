<?php
require("connection.php");

$id = $_POST["value_id"];

$dni = $_POST["dni_edit"];
$correo = $_POST["correo_edit"];
$nombre = $_POST["nombre_edit"];
$apellido = $_POST["apellido_edit"];
$direccion = $_POST["direccion_edit"];
$nacimiento = $_POST["nacimiento_edit"];

$query = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_usuario='$apellido',dni_usuario='$dni',correo_usuario='$correo',direccion_usuario='$direccion',fecha_nacimiento_usuario='$nacimiento'  WHERE id_usuario = '$id'; ";

$editarAlumno = $mysqli->query($query);

header("Location: adminAlumnos.php");
