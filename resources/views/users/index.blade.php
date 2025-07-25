@extends('layouts.plantilla')

@section('contenido')
@can('vistausuarios.show')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title> 
    <link rel="stylesheet" href="{{ url('/css/indexUsers.css') }}">
</head>
<body class="usuarios-body">
    
    <nav class="usuarios-nav">
        <h2>Lista de Usuarios Registrados</h2>
    </nav>

    <form method="GET" action="{{ route('users.index') }}" class="usuarios-form">
        <div class="usuarios-form-row">
            <input type="text" name="search" placeholder="Buscar por Nombre o Email" value="{{ request('search') }}">
            <button type="submit">Buscar</button>
        </div>
        <a class="usuarios-pdf-link" href="{{ route('usuarios.pdf') }}" target="_blank">Generar PDF de Usuarios</a>
    </form>

    <table class="usuarios-table" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Creación</th>
                <th>Eliminar Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="usuarios-btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

@endcan
@endsection
