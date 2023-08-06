<?php
require("connection.php");

$id = $_POST["value_id"];

$correo_nuevo = $_POST["email_edit"];
$nombre_nuevo = $_POST["nombre_edit"];
$apellido_nuevo = $_POST["apellido_edit"];
$direccion_nuevo = $_POST["direccion_edit"];
$nacimiento_nuevo = $_POST["nacimiento_edit"];
$clase_nuevo = $_POST["clase_edit"];





/* $query = "UPDATE usuarios SET nombre_usuario='$nombre_nuevo', apellido_usuario='$apellido_nuevo',correo_usuario='$correo_nuevo',direccion_usuario='$direccion_nuevo',fecha_nacimiento_usuario='$nacimiento_nuevo'  WHERE id_usuario = '$id' UPDATE usuario_curso_maestro SET id_curso='$clase_nuevo' WHERE id_usuario ='$id'; "; */