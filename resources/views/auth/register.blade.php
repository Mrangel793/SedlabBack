@extends('layouts.app')

@section('content')
        <div class="flex flex-col lg:flex-row p-4 w-full lg:h-full items-center justify-center">
            <div class="flex justify-center items-center sm:mb-4">
                <img src="../images/logo-seed.jpg" alt="logo" width="384" height="200">
            </div>
                <div class="lg:ml-14">
                    <div class="flex flex-col">
                        <div class="flex flex-wrap justify-center">
                            <div class="mt-5">
                                <span class="text-xl mt-4 font-bold mr-10 xl:mt-10">Información personal</span>
                            </div>
                            <div class="flex-col">
                                <div class="flex flex-wrap justify-center">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center ">
                                        <input class="w-full outline-none" placeholder="Nombres">
                                    </div>
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center sm:mx-[25px] relative">
                                        <input class="w-full outline-none" placeholder="Apellidos">
                                    </div>

                                </div>
                                <div class="flex flex-wrap justify-center">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center">
                                        <select class="w-full outline-none">
                                            <option value="" disabled selected hidden>Seleccione un tipo</option>
                                            <option value="tipo1">Tipo 1</option>
                                            <option value="tipo2">Tipo 2</option>
                                            <option value="tipo3">Tipo 3</option>
                                        </select>
                                    </div>
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center sm:mx-[25px] relative">
                                        <input class="w-full outline-none" placeholder="Numero documento">
                                    </div>
                                </div>
                                <div class="flex flex-wrap justify-center">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center ">
                                        <input type="date"class="w-full outline-none" placeholder="Fecha de nacimiento">
                                    </div>
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center sm:mx-[25px] relative">
                                        <input class="w-full outline-none" placeholder="Genero">
                                    </div>
                                </div>
                                <div class="flex flex-wrap justify-center lg:justify-normal">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center ">
                                        <input type="password" class="w-full outline-none" placeholder="Contraseña">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                    <div class="flex flex-col">
                        <div class="flex flex-wrap items-center justify-between">
                            <div>
                                <h1 class="text-xl font-bold">Dirección</h1>
                            </div>
                            <div class="flex-col">
                                <div class="flex flex-wrap justify-center">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center ">
                                        <input class="w-full outline-none" placeholder="Ciudad">
                                    </div>
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center sm:mx-[25px] relative">
                                        <input class="w-full outline-none" placeholder="Municipio">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                    <div class="flex flex-col">
                        <div class="flex flex-wrap items-center justify-between">
                            <div>
                                <h1 class="text-xl font-bold">Contacto</h1>
                            </div>
                            <div class="flex-col">
                                <div class="flex flex-wrap justify-center">
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center ">
                                        <input class="w-full outline-none" placeholder="Correo">
                                    </div>
                                    <div
                                        class="rounded-xl border border-gray-300 p-4 bg-white mt-6 w-[260px] mx-4 justify-center sm:mx-[25px] relative">
                                        <input class="w-full outline-none" placeholder="Telefono">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection