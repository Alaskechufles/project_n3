<?php
require("connection.php");
$idCursoSelect = $_POST["id_curso"];
$nombreNuevo = $_POST["clase_edit"];
$idMaestro = $_POST["maestro_edit"];

var_dump($idMaestro);

$query = "UPDATE cursos SET nombre_curso='$nombreNuevo' WHERE id_curso='$idCursoSelect'";

$agregarCurso = $mysqli->query($query);

if ($idMaestro !== "ninguno") {
    $query2 = "SELECT * FROM cursos WHERE nombre_curso='$nombreNuevo'";

    $traerDatosClase = $mysqli->query($query2);

    $datosClase = $traerDatosClase->fetch_assoc();

    $idCurso = $datosClase["id_curso"];

    $query3 = "INSERT INTO usuario_curso_maestro (id,id_usuario_maestro,id_curso_maestro) VALUES (NULL,'$idMaestro','$idCurso')";

    $asignarMaestro = $mysqli->query($query3);
}



header("Location: adminClases.php");
