@extends('layouts.plantilla')

@section('contenido')
@can('vistausuarios.show')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <!-- <h2>Lista de Usuarios Registrados</h2>

    <a href="{{ route('usuarios.pdf') }}" target="_blank" class="btn btn-primary">
    Generar PDF de Usuarios
    </a> -->

    <nav class="nav-botones">
    <ul class="nav-menu">
        <li class="nav-item">
            <h2>Lista de Usuarios Registrados</h2>
        </li>
        <li class="nav-item">
            <a href="{{ route('usuarios.pdf') }}" target="_blank" class="btn btn-primary">Generar PDF de Usuarios</a>
        </li>
    </ul>
    </nav>
    <form method="GET" action="{{ route('users.index') }}">
    <input type="text" name="search" placeholder="Buscar por Nombre o Email" class="form-control" value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Buscar</button>
    </form>


    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endcan
@endsection
