<?php
require("connection.php");

$idEliminar = $_POST["eliminar"];


$query = "DELETE FROM usuario_curso_maestro WHERE id_usuario_maestro='$idEliminar'";

$eliminarMaestro = $mysqli->query($query);

$query2 = "DELETE FROM usuarios WHERE id_usuario='$idEliminar'";

$eliminarUsuarioMaestro = $mysqli->query($query2);

header("Location: adminMaestros.php");
