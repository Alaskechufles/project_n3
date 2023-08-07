<?php
require("connection.php");

$idEliminar = $_POST["eliminar"];


$verificarCurso = $mysqli->query("SELECT * FROM usuario_curso WHERE id_usuario='$idEliminar'");

if ($verificarCurso) {

    $query = "DELETE FROM usuario_curso WHERE id_usuario='$idEliminar'";

    $eliminarAlumno = $mysqli->query($query);
}


$query2 = "DELETE FROM usuarios WHERE id_usuario='$idEliminar'";

$eliminarUsuarioAlumno = $mysqli->query($query2);

header("Location: adminAlumnos.php");
