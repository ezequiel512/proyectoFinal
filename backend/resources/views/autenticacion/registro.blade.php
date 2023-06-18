    <!DOCTYPE html>
    <html>

    <head>
        <title>Registro</title>
        <link rel="icon" href="../../assets/Imagen/Favicon.ico">
    </head>

    <body>
        @extends('layouts.master')

        @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card login-container">

                            <div class="card-body login">
                                <form method="POST" action="{{ route('registro') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div>
                                        <label for="nombre_usuario" class="col-md-4 col-form-label text-md-right"
                                            :value="__('Name')">{{ __('Nombre de usuario ') }}</label>

                                        <input id="nombre_usuario" class="block mt-1 w-full" type="text"
                                            name="nombre_usuario" :value="old('nombre_usuario')" required autofocus />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <label for="correo_electronico" class="col-md-4 col-form-label text-md-right"
                                            :value="__('Email')">{{ __('Correo electrónico') }}</label>

                                        <input id="correo_electronico" class="block mt-1 w-full" type="email"
                                            name="correo_electronico" :value="old('correo_electronico')" required />
                                    </div>

                                    <!--Roles -->
                                    <div class="mt-4">
                                        <label for="rol">Rol: </label><br>

                                        <label
                                            class="form-check-label col-md-4 col-form-label text-md-right  block mt-1 w-full">
                                            <input type="radio" class="form-check-input" name="rol"
                                                value="creador">Creador
                                        </label><br>

                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input block mt-1 w-full" name="rol"
                                                value="participante">Participante
                                        </label><br>

                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input  block mt-1 w-full" name="rol"
                                                value="ambos">Ambos
                                        </label>
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <label for="contrasenya" class="col-md-4 col-form-label text-md-right"
                                            :value="__('contrasenya')">{{ __('Contraseña: ') }}</label>

                                        <input id="contrasenya" class="block mt-1 w-full" type="password" name="contrasenya"
                                            required autocomplete="new-password" />

                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right"
                                            :value="__('Confirm Password')">{{ __('Confirma contraseña: ') }}</label>

                                        <input id="contrasenya_confirmation" class="block mt-1 w-full" type="password"
                                            name="contrasenya_confirmation" required>

                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 col-md-4"
                                            href="{{ route('login') }}">
                                            {{ __('¿Ya te has registrado?') }}
                                        </a>

                                        <button class="mt-4 btn-danger">
                                            {{ __('Registrarse') }}
                                        </button>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

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
