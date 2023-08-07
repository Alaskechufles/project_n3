<?php
require("connection.php");

$claseNueva = $_POST["clase_nueva"];
$idMaestro = $_POST["maestro"];

$query = "INSERT INTO cursos (id_curso, nombre_curso) VALUES (NULL, '$claseNueva')";

$agregarCurso = $mysqli->query($query);

$query2 = "SELECT * FROM cursos WHERE nombre_curso='$claseNueva'";

$traerDatosCurso = $mysqli->query($query2);
$datosCurso = $traerDatosCurso->fetch_assoc();
$idCursoNuevo = $datosCurso["id_curso"];

$query3 = "INSERT INTO usuario_curso_maestro (id,id_usuario_maestro,id_curso_maestro) VALUES (NULL,'$idMaestro','$idCursoNuevo')";

$asignarMaestro = $mysqli->query($query3);

header("Location: adminClases.php");
