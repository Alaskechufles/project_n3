<?php
require("connection.php");
session_start();

$idCurso = $_POST["eliminar"];

$idAlumno = $_SESSION["data"]["id_usuario"];

var_dump($idAlumno);
var_dump($idCurso);

$query = "DELETE FROM usuario_curso WHERE id_usuario='$idAlumno' AND id_curso='$idCurso'";

$eliminar = $mysqli->query($query);

header("Location: alumnoClases.php");
