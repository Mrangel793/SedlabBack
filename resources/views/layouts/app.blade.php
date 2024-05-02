<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- css -->

    {{-- Hay que cambiar de donde se sacan los iconos, este link ref retrasa y no contribuye al performance (utilizar fontawesome) --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" sizes="192x192" href="{{ asset('/images/favicon.ico') }}">


    <!-- boxicons -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="sidebar">
        <header class="relative">
            <div class="flex justify-center">
                <span class="p-11">
                    <img src="../images/logo-seed.jpg" alt="logo" width="150px" height="150px" />
                </span>
            </div>
            <i class="bx bx-chevron-right toggle "></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="h-14 flex items-center">
                        <a href="../images/logo.jpg" class="flex items-center">
                            <i
                                class="bx bx-home icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="mt-1 text nav-text text-gray-700 transition duration-200">DashBoard</span>
                        </a>

                    </li>
                    <li class="h-14 flex items-center">
                        <a href="{{ route('login') }}">
                            <i
                                class="bx bx-bar-chart-alt-2 icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="text nav-text"> Login </span>
                        </a>
                    </li>
                    <li class="h-14 flex items-center">
                        <a href="">
                            <i
                                class="bx bx-bell icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="text nav-text"> Notification </span>
                        </a>
                    </li>
                    <li class="h-14 flex items-center">
                        <a href="">
                            <i
                                class="bx bx-pie-chart-alt icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="text nav-text"> Analytics </span>
                        </a>
                    </li>
                    <li class="h-14 flex items-center">
                        <a href="">
                            <i
                                class="bx bx-heart icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="text nav-text"> Likes </span>
                        </a>
                    </li>
                    <li class="h-14 flex items-center ">
                        <a href="">
                            <i
                                class="bx bx-wallet icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                            <span class="text nav-text"> Wallets </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <li class="h-14 flex items-center">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                        <i
                            class="bx bx-log-out icon text-center text-xl min-w-14 text-gray-700 transition duration-200"></i>
                        <span class="text nav-text">{{ __('Cerrar Sesión') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

                <li class="mode list-none">
                    <div class="moon-sun ">
                        <i class="bx bx-moon icon moon active ml-6" id="moon-icon"></i>
                        <i class="bx bx-sun icon sun ml-6" id="sun-icon"></i>
                        <div class="toggle-switch">
                            <input type="checkbox" id="toggle-switch" class="hidden">
                            <span class="switch"> </span>
                        </div>
                    </div>
                </li>



            </div>
        </div>
    </nav>
    <div class="home w-full h-full ">
        @yield('content')
    </div>

</body>

</html>
