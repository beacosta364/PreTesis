@extends('layouts.plantilla')

@section('contenido')
@can('rolusuarios.show')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roles Usuarios</title>
  <link rel="stylesheet" href="{{ url('/css/rolesUsuarios.css') }}">
</head>
<body class="roles-body">

  <div class="roles-container">
    <div class="roles-header">
      <h2>Lista de Usuarios y sus Roles</h2>
    </div>

    <table class="roles-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Rol Actual</th>
          <th>Nuevo Rol</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->id }}</td>
          <td>{{ $usuario->name }}</td>
          <td>{{ $usuario->role_name }}</td>
          <td>
            <form action="{{ route('usuarios.actualizarRol') }}" method="POST">
              @csrf
              <input type="hidden" name="user_id" value="{{ $usuario->id }}">
              <select name="role_id" class="roles-select">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ $usuario->role_id == $role->id ? 'selected' : '' }}>
                  {{ $role->name }}
                </option>
                @endforeach
              </select>
          </td>
          <td>
              <button type="submit" class="roles-button">Actualizar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>


@endcan
@endsection