@extends('layouts.app')
@section('template_title')
    Miperfil
@endsection

@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container mx-auto px-4 py-12">

        <div class="grid grid-cols-12 gap-4 mb-6">

            <div class="col-span-12 bg-white rounded-lg p-12 shadow-lg">
                <div>
                    <h1 style="font-size: 200%; margin-bottom: 20px;">{{ __('Mi perfil') }}</h1>
                </div>
                <div>
                    <h5 class="text-2xl fondit-bold mb-2 mr-12  text-sky-900" style="margin-left: 15px;">Información Personal
                    </h5>

                </div>

                <div class="flex">
                    <div class="w-1/3 flex flex-col items-center">
                        <img src="/images/miperfil.png" alt="Imagen" class="imagen" style="max-width:60% ">
                    </div>
                    <div class="w-2/3 flex flex-wrap">
                        <div class="w-full md:w-1/2  pr-2">
                            <label for="nombre" class="block mb-2 text-blue-400">Nombre:</label>
                            <input type="text" id="nombre"
                                class="mt-1 p-2 h-11 w-full mb-6 border rounded-md bg-neutral-100">
                        </div>
                        <div class="w-full md:w-1/2 mb-2">
                            <label for="apellido" class="block mb-2 text-blue-400">Apellido:</label>
                            <input type="text" id="apellido"
                                class="mt-1 p-2 h-11 w-full border outline-none rounded-md  bg-neutral-100">
                        </div>
                        <div class="w-full md:w-1/2 pr-2" style="margin-block-start:-7px">
                            <label for="tipoDocumento" class="block mb-2  text-blue-400 ">Tipo de Documento:</label>
                            <select id="tipoDocumento" class="mt-1 p-2 h-11 w-full border rounded-md bg-neutral-100">
                                <option value="" disabled selected>Seleccionar tipo de documento...</option>
                                <option value="Cedula">Cédula ciudadanía</option>
                                <option value="pasaporte">Pasaporte</option>
                                <option value="carnetExtranjeria">Carnet de Extranjería</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 mb-2" style="margin-block-start: -7px">
                            <label for="documento" class="block mb-2  text-blue-400">Número de Documento:</label>
                            <input type="number" id="documento"
                                class="mt-1 p-2 h-11 w-full border rounded-md bg-neutral-100">
                        </div>
                    </div>
                </div>
                <br>
                <div class="flex items-start" style="margin-block-start: -7px">
                    <div class="w-1/3"></div>
                    <div class="w-2/3 flex">
                        <div class="md:w-1/2 mr-4 relative">
                            <label for="fechaNacimiento" class="block mb-2 text-blue-400">Fecha de Nacimiento:</label>
                            <div class="relative">
                                <input type="date" id="fechaNacimiento" class="mt-1 p-2 h-11 w-full border rounded-md bg-slate-100">
                                <i class="fas fa-calendar-alt absolute inset-y-0 right-0 mr-2 mt-5 text-blue-400"></i> <!-- Ícono personalizado -->
                            </div>
                        </div>
                        <style>
                           
                        </style>
                        <div class="md:w-1/2 relative">
                            <label for="genero" class="block mb-2 text-blue-400">Género:</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <i class="fas fa-venus-mars absolute bottom-4"style="color: #74C0FC;"></i>
                            </div>
                            <select id="genero" class="mt-1 p-2 pl-8 h-11 w-full border rounded-md bg-slate-100">
                                <option value="" disabled selected>Seleccionar género...</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/3 flex flex-col items-center">
                    </div>
                    <div class="w-2/3 flex flex-wrap" style="margin-block-start: 50px">
                        <div class="w-full md:w-1/2 pr-2 relative">
                            <label for="contrasena" class="block mb-2 text-blue-400">Contraseña:</label>
                            <div class="relative">
                                <input type="password" id="contrasena"
                                    class="mt-1 p-2 pl-2 pr-2 w-full border rounded-md bg-slate-100"
                                    placeholder="Ingresa tu contraseña">
                                <span
                                    class="eye-icon absolute inset-y-0 right-0 pr-2 mt-2 flex items-center text-blue-400 cursor-pointer"
                                    onclick="togglePasswordVisibility()">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr><br>

                <div class="flex items-start">
                    <div class="w-1/3">
                        <h5 class="text-2xl fondit-bold mb-2  text-sky-900 mr-12"style="margin-left: 15px;">Contacto</h5>
                    </div>
                    <div class="w-2/3 flex">
                        <div class="w-full md:w-1/2 mr-4 relative">
                            <label for="correo" class="block mb-2 text-blue-400">Correo Electrónico:</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <i class="fa-solid fa-envelope fa-lg absolute bottom-5" style="color: #74C0FC;"></i>
                            </div>
                            <input type="email" id="correo" name="correo"
                                class="mt-1 p-2 pl-8 pr-2 w-full border rounded-md bg-neutral-100"
                                placeholder="Correo Electrónico">
                        </div>

                        <div class="w-full md:w-1/2 relative">
                            <label for="celular" class="block mb-2 text-blue-400">Celular:</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <i class="fas fa-mobile-alt absolute bottom-3" style="color: #74C0FC;"></i>
                            </div>
                            <input type="tel" id="celular" name="celular"
                                class="mt-1 p-2 pl-8 w-full border rounded-md bg-neutral-100" placeholder="Celular">
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br><br>
                <div class="flex items-start">
                    <div class="w-1/3">
                        <h5 class="text-2xl fondit-bold mb-2 mr-12   text-sky-900"style="margin-left: 15px;">Direccion</h5>
                    </div>
                    <div class="w-2/3 flex">
                        <div class="w-full md:w-1/2 mr-4 relative">
                            <label for="departamento" class="block mb-2 text-blue-400">Departamento:</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                                <i class="fa-solid fa-building fa-lg absolute bottom-5" style="color: #74C0FC;"></i>

                            </div>
                            <select id="departamento" name="departamento"
                                class="mt-1 p-2 pl-8 pr-2  w-full border rounded-md bg-neutral-100">
                                <option value="" disabled selected>Seleccionar departamento...</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Áncash">Santander</option>
                                <option value="Apurímac">Antioquia</option>
                            </select>
                        </div>

                        <div class="w-full md:w-1/2 relative">
                            <label for="municipio" class="block mb-2 text-blue-400">Municipio:</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <i class="fas fa-city absolute bottom-3"style="color: #74C0FC;"></i>
                            </div>
                            <select id="municipio" name="municipio"
                                class="mt-1 p-2 pl-8 w-full border rounded-md bg-neutral-100">
                                <option value="" disabled selected>Seleccionar municipio...</option>
                                <option value="Municipio1">piedecuesta</option>
                                <option value="Municipio2">giron</option>
                                <option value="Municipio3">bucaramanga</option>
                            </select>
                        </div>


                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-sky-400 hover:bg-cyan-400 text-white font-bold py-2 px-4 mt-12 rounded">
                        Guardar Cambios
                    </button>
                </div>

            </div>
        </div>
    </div>
    @vite(['resources/js/app.js'])
@endsection
