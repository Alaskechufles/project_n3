<?php
require("connection.php");

$id = $_POST["value_id"];

$correo = $_POST["email"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$nacimiento = $_POST["nacimiento"];
$clase = $_POST["clase"];

$query = "INSERT INTO usuarios(nombre_usuario,apellido_usuario,correo_usuario,direccion_usuario,fecha_nacimiento_usuario,rango,contra_usuario) VALUES ('$nombre','$apellido','$correo','$direccion','$nacimiento','2','$nombre')";

$agregarMaestro = $mysqli->query($query);

$query2 = "SELECT * FROM usuarios WHERE correo_usuario='$correo'";

$maestroNuevo = $mysqli->query($query2);

$datosMaestroNuevo = $maestroNuevo->fetch_assoc();

$idMaestroNuevo = $datosMaestroNuevo["id_usuario"];

$query3 = "INSERT INTO usuario_curso_maestro(id_usuario_maestro,id_curso_maestro) VALUES ('$idMaestroNuevo','$clase')";

$asignarCurso = $mysqli->query($query3);

header("Location: adminMaestros.php");
