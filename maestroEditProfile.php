<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maestro - Perfil</title>
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
                <h2 class="text-[#C6D2D2] text-[26px]">Maestro</h2>
                <p class="text-[#C6D2D2] text-[26px]">Harold Zuñiga</p>
            </div>
            <hr />
            <div class="">
                <div class="w-full">
                    <h2 class="text-center text-[#C6D2D2] text-[22px] pt-7">
                        MENU MAESTROS
                    </h2>
                </div>
                <div class="p-6 flex flex-col gap-5">


                    <a href="maestroAlumnos.php" class="text-[#C6D2D2] text-[22px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                            </svg>
                        </div>
                        <p>Alumnos</p>
                    </a>

                </div>
            </div>
        </div>
        <div class="w-full">
            <nav class="flex flex-row bg-white w-full justify-between p-5">
                <div class="flex flex-row items-center gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <h3>Home</h3>
                </div>

                <div class="flex-row flex items-center gap-4">
                    <h3>Harold Zuñiga</h3>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                </div>
            </nav>
            <div class="w-full flex flex-row justify-between p-4">
                <h3 class="text-[25px] font-semibold">Editar datos de perfil</h3>
                <div>
                    <a class="text-[#70A2EE]" href="">Home</a> /
                    <a href="">Perfil</a>
                </div>
            </div>
            <div class="bg-white p-4 w-[700px] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                <h3>Información de Usuario</h3>
            </div>
            <div class="bg-white p-4 w-[700px] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                <form class="" action="#">
                    <div class=" flex flex-col gap-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Correo Electronico</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingresa email" required>
                        <label for="contra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Contraseña - Ingresa Nueva Contraseña</label>
                        <input type="password" name="contra" id="contra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Para modificar, ingresa una nueva contraseña" required>
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nombre(s)</label>
                        <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingresa nombre(s)" required>
                        <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Apellido(s)</label>
                        <input type="text" name="apellido" id="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingresa apellido(s)" required>
                        <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ingresa la dirección" required>
                        <label for="nacimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Fecha de nacimiento</label>
                        <input type="date" name="nacimiento" id="nacimiento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="mm/dd/yyy" required>
                    </div>

                    <div class=" flex flex-row w-full justify-start  mt-5">

                        <button type="submit" class="w-[150px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar
                            cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>