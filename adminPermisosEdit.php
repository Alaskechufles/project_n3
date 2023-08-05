<?php
require("connection.php");

$correo = $_POST["email"];
$rango_nuevo = $_POST["rango_nuevo"];


$query = "SELECT * FROM usuarios WHERE correo_usuario = '$correo'";

$resultado = $mysqli->query($query);

$resultado = $resultado->fetch_assoc();

$query2 = "UPDATE usuarios SET rango='$rango_nuevo' WHERE correo_usuario='$correo'";

$rangoCambiado = $mysqli->query($query2);

header("Location: adminPermisos.php");
