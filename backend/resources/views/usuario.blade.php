<!DOCTYPE HTML>
<html>

<head>
    <title>Perfil de Usuario</title>
    <!-- Aquí van tus etiquetas meta, enlaces a CSS y otros scripts -->
</head>

<body>
    <div class="container">
        <h1>Perfil de Usuario</h1>
        @extends('layouts.master')

        @section('content')
        <div class="profile">
            <img src="{{ $usuario->foto_perfil }}" alt="Foto de perfil">
            <h2>{{ $usuario->nombre_usuario }}</h2>
            <p>Correo electrónico: {{ $usuario->correo_electronico }}</p>
            <p>Rol: {{ $usuario->rol }}</p>
            <p>Descripción: {{ $usuario->descripcion }}</p>
            <p>Fecha de creación: {{ $usuario->created_at }}</p>
            <p>Última actualización: {{ $usuario->updated_at }}</p>
        </div>

            <!-- Aquí puedes agregar más contenido o funcionalidades para el perfil -->
        @endsection
    </div>
</body>

</html>

</html>
