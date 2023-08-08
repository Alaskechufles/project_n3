<?php
require("connection.php");

$id = $_POST["value_id"];

$correo_nuevo = $_POST["email_edit"];
$nombre_nuevo = $_POST["nombre_edit"];
$apellido_nuevo = $_POST["apellido_edit"];
$direccion_nuevo = $_POST["direccion_edit"];
$nacimiento_nuevo = $_POST["nacimiento_edit"];
$clase_nuevo = $_POST["clase_edit"];

var_dump($id);
var_dump($correo_nuevo);
var_dump($nombre_nuevo);
var_dump($apellido_nuevo);
var_dump($direccion_nuevo);
var_dump($nacimiento_nuevo);
var_dump($clase_nuevo);

$query = "UPDATE usuarios SET nombre_usuario='$nombre_nuevo', apellido_usuario='$apellido_nuevo',correo_usuario='$correo_nuevo',direccion_usuario='$direccion_nuevo',fecha_nacimiento_usuario='$nacimiento_nuevo'  WHERE id_usuario = '$id'; ";
$cambioTablaMaestros = $mysqli->query($query);

$query2 = "SELECT * FROM usuario_curso_maestro WHERE id_usuario_maestro ='$id'";
$verificarMaestro = $mysqli->query($query2);

if ($verificarMaestro->fetch_assoc()) {

    $query3 = "UPDATE usuario_curso_maestro SET id_curso_maestro='$clase_nuevo' WHERE id_usuario_maestro ='$id'; ";
    $cambioTablaMaestrosCursos = $mysqli->query($query3);
} else {
    $query4 = "INSERT INTO usuario_curso_maestro (id,id_usuario_maestro,id_curso_maestro) VALUES (NULL,'$id','$clase_nuevo')";
    $agregarCursoMaestro = $mysqli->query($query4);
}


header("Location: adminMaestros.php");
