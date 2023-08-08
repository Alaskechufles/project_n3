<?php
session_start();
require("connection.php");
/* if (!($_SESSION["data"]["rango"] === "3")) {
    header("Location: noAutorizado.php");
} */

$nombreCompleto = $_SESSION["data"]["nombre_usuario"] . " " . $_SESSION["data"]["apellido_usuario"];
$idUsuario = $_SESSION["data"]["id_usuario"];

$queryDatos = "SELECT * FROM usuarios WHERE id_usuario='$idUsuario'";
$resultado = $mysqli->query($queryDatos);
$resultado = $resultado->fetch_assoc();

$nombre = $resultado["nombre_usuario"];
$apellido = $resultado["apellido_usuario"];
$dni = $resultado["dni_usuario"];
$correo = $resultado["correo_usuario"];
$direccion = $resultado["direccion_usuario"];
$fecha = $resultado["fecha_nacimiento_usuario"];
$contra = $resultado["contra_usuario"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar - Perfil</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</head>

<body>
    <main class="h-screen bg-[#C6D2D2] flex flex-row">
        <div class="w-[350px] h-screen bg-[#2164A7]">
            <div class="flex flex-row justify-start items-center gap-4 p-4">
                <div class="w-14 rounded-full overflow-hidden">
                    <img src="./assets/logoQ.jpg" alt="" />
                </div>
                <h1 class="text-[#C6D2D2] text-[26px]">Universidad</h1>
            </div>
            <hr />
            <div class="flex flex-col gap-3 py-4 px-8">
                <h2 class="text-[#C6D2D2] text-[26px]"><?= $nombreCompleto ?></h2>
                <p class="text-[#C6D2D2] text-[26px]">Usuario</p>
            </div>
            <hr />

        </div>
        <div class="w-full">
            <nav class="flex flex-row bg-white w-full justify-between p-5">
                <div class="flex flex-row items-center gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <h3>Home</h3>
                </div>

                <div>

                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-gray-700 bg-white hover:bg-[#C6D2D2] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        <h3><?= $nombreCompleto ?></h3>
                        <div class=" ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">

                            <li>
                                <a href="editarDatos.php"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar
                                    Perfil</a>
                            </li>
                            <li>
                                <a href="logOut.php"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    out</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <div class="w-full flex flex-row justify-end p-4">

                <div>
                    <a class="text-[#70A2EE]" href="">Home</a> /
                    <a href="editarDatos.php">editar</a>
                </div>
            </div>
            <div class="bg-white p-4 mx-5 w-max rounded-xl shadow-lg text-[#8FA5BD]">
                <h3 class=" text-[25px]">Editar Datos de perfil</h3>
            </div>
            <div class="bg-white p-4 ml-5 w-[600px] rounded-xl shadow-lg text-[#8FA5BD] mt-5">
                <form action="usuarioEditProfile.php" class=" flex flex-col gap-3" method="post">
                    <label for="matricula" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Matricula</label>
                    <input value="<?= $dni ?>" type="text" name="matricula" id="matricula"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingresa nombre(s)" required>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Correo Electronico</label>
                    <input value="<?= $correo ?>" type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingresa email" required>
                    <label for="contra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Contraseña Nueva</label>
                    <input value="<?= $contra ?>" type="password" name="contra" id="contra"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingrese su nueva contraseña" required>
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nombre(s)</label>
                    <input value="<?= $nombre ?>" type="text" name="nombre" id="nombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingresa nombre(s)" required>
                    <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Apellido(s)</label>
                    <input value="<?= $apellido ?>" type="text" name="apellido" id="apellido"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingresa apellido(s)" required>
                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Dirección</label>
                    <input value="<?= $direccion ?>" type="text" name="direccion" id="direccion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Ingresa la dirección" required>
                    <label for="nacimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Fecha de nacimiento</label>
                    <input value="<?= $fecha ?>" type="date" name="nacimiento" id="nacimiento"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="mm/dd/yyy" required>
                    <button value="<?= $idUsuario ?>" name="id_value"
                        class="w-[150px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar
                        Cambios</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>