<?php
require("connection.php");
session_start();

$arrCursos = $_POST["cursos"];
$idAlumno = $_SESSION["data"]["id_usuario"];

var_dump($arr);

foreach ($arrCursos as $id_curso) {
    $query = "INSERT INTO usuario_curso(id_usuario,id_curso) VALUE ('$idAlumno','$id_curso')";
    $agregarCursos = $mysqli->query($query);
}

header("Location: alumnoClases.php");
