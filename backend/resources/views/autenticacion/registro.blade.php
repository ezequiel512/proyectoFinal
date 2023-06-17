<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="nombre_usuario"
                                        class="col-md-4 col-form-label text-md-right" :value="__('Name')" >{{ __('Nombre de usuario ') }}</label>

                                <input id="nombre_usuario" class="block mt-1 w-full" type="text" name="nombre_usuario" :value="old('nombre_usuario')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <label for="correo_electronico"
                                        class="col-md-4 col-form-label text-md-right" :value="__('Email')" >{{ __('Correo electrónico') }}</label>

                                <input id="correo_electronico" class="block mt-1 w-full" type="email" name="correo_electronico" :value="old('correo_electronico')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <label for="contrasenya"
                                        class="col-md-4 col-form-label text-md-right" :value="__('contrasenya')">{{ __('Contraseña: ') }}</label>

                                <input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <label for="password_confirmation" :value="__('Confirm Password')">Confirma contraseña: </label>

                                <input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button class="ml-4">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
