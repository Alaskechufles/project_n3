<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumno - Calificaciones</title>
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
                <h2 class="text-[#C6D2D2] text-[26px]">Alumno</h2>
                <p class="text-[#C6D2D2] text-[26px]">Diego Huarsaya</p>
            </div>
            <hr />
            <div class="">
                <div class="w-full">
                    <h2 class="text-center text-[#C6D2D2] text-[22px] pt-7">
                        MENU ALUMNOS
                    </h2>
                </div>
                <div class="p-6 flex flex-col gap-5">


                    <a href=""
                        class="text-[#C6D2D2] text-[14px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg>
                        </div>
                        <p>Ver Calificaciones</p>
                    </a>
                    <a href=""
                        class="text-[#C6D2D2] text-[14px] flex gap-4 justify-start items-center hover:bg-[#1a5086] h-[50px] pl-5 rounded-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-easel2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z" />
                            </svg>
                        </div>
                        <p>Administra tus Clases</p>
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
                    <h3>Diego Huarsaya</h3>
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
                <h3 class="text-[25px] font-semibold">Tabla de Calificaciones</h3>
                <div>
                    <a class="text-[#70A2EE]" href="">Home</a> /
                    <a href="">Calificaciones</a>
                </div>
            </div>
            <div class="bg-white p-4 w-[700px] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                <h3 class=" text-[25px]">Calificaciones</h3>
            </div>
            <div class="bg-white p-4 w-[700px] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                <table class=" table-auto w-full">
                    <thead>
                        <tr class=" text-center border-b  border-[#2c7fd2]">
                            <th class=" w-1/3">#</th>
                            <th class=" w-1/3">Nombre de clase</th>
                            <th class=" w-1/3">Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" text-center border-b  border-[#2c7fd2]">
                            <td class=" w-1/3">1</td>
                            <td class=" w-1/3">Programación</td>
                            <td class=" w-1/3">100</td>
                        </tr>
                        <tr class=" text-center border-b  border-[#2c7fd2]">
                            <td class=" w-1/3">2</td>
                            <td class=" w-1/3">Psicologia</td>
                            <td class=" w-1/3">100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>