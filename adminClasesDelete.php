<?php
require("connection.php");

$idClase = $_POST["eliminar"];

$query = "SELECT * FROM usuario_curso_maestro WHERE id_curso_maestro='$idClase'";

$verificarMaestro = $mysqli->query($query);

$datosClase = $verificarMaestro->fetch_assoc();

if ($datosClase) {

    $query2 = "DELETE FROM usuario_curso_maestro WHERE id_curso_maestro='$idClase'";
    $eliminarClase = $mysqli->query($query2);
}

$query3 = "DELETE FROM cursos WHERE id_curso ='$idClase'";

$eliminarCurso = $mysqli->query($query3);

header("Location: adminClases.php");
