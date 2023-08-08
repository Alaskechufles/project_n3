<?php
session_start();
require("connection.php");
if (!($_SESSION["data"]["rango"] === "1")) {
    header("Location: noAutorizado.php");
}
$nombreCompleto = $_SESSION["data"]["nombre_usuario"] . " " . $_SESSION["data"]["apellido_usuario"];

/* $dataClases = $mysqli->query("SELECT * FROM usuarios LEFT JOIN usuario_curso_maestro ON usuarios.id_usuario = usuario_curso_maestro.id_usuario_maestro LEFT JOIN cursos ON usuario_curso_maestro.id_curso_maestro = cursos.id_curso WHERE rango='2';"); */

$dataClases = $mysqli->query("SELECT * FROM cursos LEFT JOIN usuario_curso_maestro ON cursos.id_curso=usuario_curso_maestro.id_curso_maestro LEFT JOIN usuarios ON usuario_curso_maestro.id_usuario_maestro = usuarios.id_usuario;");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adminstrador - Clases</title>
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
                <p class="text-[#C6D2D2] text-[26px]">Administrador</p>
            </div>
            <hr />
            <div class="">
                <div class="w-full">
                    <h2 class="text-center text-[#C6D2D2] text-[22px] pt-7">
                        MENU ADMINISTRACIÓN
                    </h2>
                </div>
                <div class="p-6 flex flex-col gap-5">
                    <a href="/adminPermisos.php"
                        class="text-[#C6D2D2] text-[22px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            </svg>
                        </div>
                        <p>Permisos</p>
                    </a>
                    <a href="/adminMaestros.php"
                        class="text-[#C6D2D2] text-[22px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-workspace" viewBox="0 0 16 16">
                                <path
                                    d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                            </svg>
                        </div>
                        <p>Maestros</p>
                    </a>
                    <a href="/adminAlumnos.php"
                        class="text-[#C6D2D2] text-[22px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                <path
                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                            </svg>
                        </div>
                        <p>Alumnos</p>
                    </a>
                    <a href="/adminClases.php"
                        class="text-[#C6D2D2] text-[22px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-easel2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z" />
                            </svg>
                        </div>
                        <p>Clases</p>
                    </a>
                </div>
            </div>
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

                <div class="flex-row flex items-center gap-4">
                    <h3><?= $nombreCompleto ?></h3>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                </div>
            </nav>
            <div class="w-full flex flex-row justify-between p-4">
                <h3 class="text-[25px] font-semibold">Lista de Clases</h3>
                <div>
                    <a class="text-[#70A2EE]" href="/adminDashboard.php">Home</a> /
                    <a href="/adminClases.php">Clases</a>
                </div>
            </div>
            <div
                class="bg-white p-4 w-[90%] m-5 rounded-xl shadow-lg text-[#8FA5BD] flex flex-row justify-between items-center">
                <h3>Información de Clases</h3>
                <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1"
                    class=" text-white bg-[#007BFF] px-4 py-2 flex justify-center items-center rounded-lg">
                    Agregar Clase
                </button>
                <!-- Main modal -->
                <div id="authentication-modal1" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="authentication-modal1">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                    Agregar Clase
                                </h3>
                                <form class="space-y-6" action="adminClasesCreate.php" method="post">
                                    <div class=" flex flex-col gap-3">
                                        <label for="clase_nueva"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Nombre de la Materia</label>
                                        <input type="text" name="clase_nueva" id="clase_nueva"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Ingresa la materia" required>

                                    </div>
                                    <div>
                                        <label for="maestro"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maestros
                                            disponibles para la clase
                                        </label>
                                        <select name="maestro" id="maestro"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            <option value="ningun">No Asignar</option>
                                            <?php

                                            $maestrosSinCurso = $mysqli->query("SELECT * FROM usuarios LEFT JOIN usuario_curso_maestro ON usuarios.id_usuario = usuario_curso_maestro.id_usuario_maestro LEFT JOIN cursos ON usuario_curso_maestro.id_curso_maestro = cursos.id_curso WHERE rango='2' AND id_curso IS NULL;");
                                            while ($filaMaestro = $maestrosSinCurso->fetch_assoc()) {
                                                $idMaestroSC = $filaMaestro["id_usuario"];
                                                $nombreMaestroSC = $filaMaestro["nombre_usuario"] . ' ' . $filaMaestro["apellido_usuario"];

                                            ?>
                                            <option value="<?= $idMaestroSC ?>"><?= $nombreMaestroSC ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class=" flex flex-row w-full justify-end gap-5">
                                        <button type="button"
                                            class="w-[100px] text-white bg-[#6C747E] hover:text-[#6C747E] hover:bg-gray-200 px-5 py-2.5 rounded-lg text-sm ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="authentication-modal1">Close
                                        </button>
                                        <button type="submit"
                                            class="w-[150px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 w-[90%] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                <table class=" table-auto w-full">
                    <thead>
                        <tr class=" text-center border-b  border-[#2c7fd2]">
                            <th class=" w-1/6">#</th>
                            <th class=" w-1/3">Clase</th>
                            <th class=" w-1/3">Maestro</th>

                            <th class=" w-1/6">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($listaClases = $dataClases->fetch_assoc()) {
                            $id = $listaClases["id_curso"];
                            $curso = $listaClases["nombre_curso"];
                            $idMaestroAsignado = $listaClases["id_usuario"];
                            $nombreMaestroAsignado = $listaClases["nombre_usuario"] . ' ' . $listaClases["apellido_usuario"];

                            if (($listaClases["nombre_usuario"]) === null) {
                                $maestro = "No Asignado";
                            } else {
                                $maestro = $listaClases["nombre_usuario"] . " " . $listaClases["apellido_usuario"];
                            }

                        ?>
                        <tr class=" text-center border-b  border-[#2c7fd2]">
                            <td class=" w-1/6"><?= $id ?></td>
                            <td class=" w-1/3"><?= $curso ?></td>
                            <td class=" w-1/3"><?= $maestro ?></td>

                            <td class=" w-full h-[30px] flex justify-center items-center gap-5">
                                <button data-modal-target="authentication-modal<?= $id ?>a"
                                    data-modal-toggle="authentication-modal<?= $id ?>a"
                                    class=" text-[#4A93A1] flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                                <form action="adminClasesDelete.php" method="post">
                                    <button class=" text-red-600" name="eliminar" value="<?=$id?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </form>
                                <!-- Main modal -->
                                <div id="authentication-modal<?= $id ?>a" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="authentication-modal<?= $id ?>a">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="px-6 py-6 lg:px-8">
                                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                    Editar Clase
                                                </h3>
                                                <form class="space-y-6" action="adminClasesEdit.php" method="post">
                                                    <div>
                                                        <label for="clase_edit"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                            Nombre de la Materia</label>
                                                        <input type="text" name="clase_edit" id="clase_edit"
                                                            value="<?= $curso ?>"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Ingresa clase" required>

                                                    </div>
                                                    <div>
                                                        <label for="maestro_edit"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maestro
                                                            Asignada</label>
                                                        <select id="maestro_edit" name="maestro_edit"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                            <option value="ninguno">No Asignar</option>
                                                            <option value="<?= $idMaestroAsignado ?>">
                                                                <?= $nombreMaestroAsignado ?></option>

                                                            <?php

                                                                $maestrosSinCurso = $mysqli->query("SELECT * FROM usuarios LEFT JOIN usuario_curso_maestro ON usuarios.id_usuario = usuario_curso_maestro.id_usuario_maestro LEFT JOIN cursos ON usuario_curso_maestro.id_curso_maestro = cursos.id_curso WHERE rango='2' AND id_curso IS NULL;");
                                                                while ($filaMaestro = $maestrosSinCurso->fetch_assoc()) {
                                                                    $idMaestroSC = $filaMaestro["id_usuario"];
                                                                    $nombreMaestroSC = $filaMaestro["nombre_usuario"] . ' ' . $filaMaestro["apellido_usuario"];

                                                                ?>
                                                            <option value="<?= $idMaestroSC ?>"><?= $nombreMaestroSC ?>
                                                            </option>
                                                            <?php
                                                                }
                                                                ?>

                                                        </select>
                                                    </div>
                                                    <div>
                                                        <button type="button"
                                                            class="w-[100px] text-white bg-[#6C747E] hover:text-[#6C747E] hover:bg-gray-200 px-5 py-2.5 rounded-lg text-sm ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal<?= $id ?>a">Close
                                                        </button>
                                                        <button type="submit" value="<?= $id ?>" name="id_curso"
                                                            class="w-[150px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar
                                                            cambios</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
            </div>
            </tr>
            <?php
                        }
        ?>


            </tbody>
            </table>
        </div>
        </div>
    </main>
</body>

</html>