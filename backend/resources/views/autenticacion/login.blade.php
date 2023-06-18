<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>
    <link rel="icon" href="../../assets/Imagen/Favicon.ico">
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card login-container">
                        <div class="card-header login-header">{{ __('Login') }}</div>

                        <div class="card-body login">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="correo_electronico" type="email"
                                            class="form-control @error('correo_electronico') is-invalid @enderror"
                                            name="correo_electronico" value="{{ old('correo_electronico') }}" required
                                            autocomplete="correo_electronico" autofocus>

                                        @error('correo_electronico')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                                    <div class="col-md-6">
                                        <input id="contrasenya" type="password"
                                            class="form-control @error('contrasenya') is-invalid @enderror"
                                            name="contrasenya" required autocomplete="current-contrasenya">

                                        @error('contrasenya')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('contrasenya.request'))
                                            <a class="btn btn-link" href="{{ route('contrasenya.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
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
