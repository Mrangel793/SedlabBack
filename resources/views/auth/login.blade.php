<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" sizes="192x192" href="{{ asset('/images/favicon.ico') }}">
</head>

<body class="flex justify-center items-center h-screen">
    <div class="md:mx-16 md:flex justify-center items-center md:justify-around md:w-full lg:w-4/5">
        <div class="card-header w-full md:w-auto flex justify-center items-center">
            <img src="../images/logo.jpg" alt="logo" class="w-48 h-auto items-center">
        </div>


        <div
            class="card-body justify-center items-center md:justify-center md:items-center w-full md:w-72 md:mt-0 mt-14">
            <form method="POST" action="{{ route('login') }}" class="w-auto h-full flex flex-col md:mx-0">
                @csrf
                <label for="Inicio_sesion" class="text-center text-xl">{{ __('Inicio de sesión') }}</label>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <input placeholder="Usuario" id="email" type="email"
                            class="mt-9 rounded-xl outline-none bg-gray-200 w-full border-0 py-3 px-4 text-base form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <input placeholder="Contraseña" id="password" type="password"
                        class="mt-3 mb-8 rounded-xl outline-none bg-gray-200 w-full border-0 py-3 px-4 text-base  form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex items-center justify-center h-full mb-4">
                    <button type="submit"
                        class=" px-10 py-2 bg-blue-500 bg-opacity-80 text-white rounded-xl cursor-pointer btn btn-primary">
                        {{ __('Iniciar sesion') }}
                    </button>
                </div>

                <div class="form-check flex items-center justify-center h-full">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-blue-500 hover:text-blue-700 hover:font-semibold"
                            href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>

</html>
