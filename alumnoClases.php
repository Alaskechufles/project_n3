<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumno - Clases</title>
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
                <h3 class="text-[25px] font-semibold">Esquema de Clases</h3>
                <div>
                    <a class="text-[#70A2EE]" href="">Home</a> /
                    <a href="">Clases</a>
                </div>
            </div>
            <div class="bg-white p-4 mx-5 w-max rounded-xl shadow-lg text-[#8FA5BD]">
                <h3 class=" text-[25px]">Tus Materias Inscritas</h3>
            </div>
            <div class=" flex flex-row">

                <div class="bg-white p-4 w-[50%] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                    <table class=" table-auto w-full">
                        <thead>
                            <tr class=" text-center border-b  border-[#2c7fd2]">
                                <th class=" w-1/3">#</th>
                                <th class=" w-1/3">Materia</th>
                                <th class=" w-1/3">Darse de baja</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" text-center border-b  border-[#2c7fd2]">
                                <td class=" w-1/3">1</td>
                                <td class=" w-1/3">Programación</td>
                                <td class=" w-1/3">
                                    <form action="" class=" flex justify-center items-center">
                                        <button class=" text-red-600 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z" />
                                                <path
                                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                <path
                                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="bg-white p-4 w-[40%] m-5 rounded-xl shadow-lg text-[#8FA5BD]">
                    <h2 class=" font-semibold">
                        Materias para inscribir
                    </h2>
                    <hr>
                    <form action="">
                        <h2 class=" font-semibold py-3">Selecciona la(s) Clase(s)</h2>
                        <div class=" flex flex-row gap-3 items-center">
                            <input type="checkbox" name="biologia" id="biologia">
                            <label for="biologia">Biologia</label>
                        </div>
                        <div class=" flex flex-row gap-3 items-center">
                            <input type="checkbox" name="psicologia" id="psicologia">
                            <label for="psicologia">Psicologia</label>
                        </div>
                        <button type="submit" class="w-[100px] h-[40px] bg-[#017BFD] text-white rounded-lg mt-3">
                            Inscribir
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>

</html>