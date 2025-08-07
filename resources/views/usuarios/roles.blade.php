@extends('layouts.plantilla')

@section('contenido')
@can('rolusuarios.show')
<link rel="stylesheet" href="{{ url('/css/rolesUsuarios.css') }}">
  <div class="roles-container">
    <div class="roles-header">
      <h2>Lista de Usuarios y sus Roles</h2>
    </div>

<form method="GET" action="{{ url('/usuarios-roles') }}" class="barra-busqueda-form">
  <div class="barra-busqueda-row">
    <input type="text" name="busqueda" placeholder="Buscar por nombre" value="{{ $busqueda ?? '' }}" class="barra-busqueda-input">
    <button type="submit" class="barra-busqueda-boton">Buscar</button>
  </div>
  <div class="usuarios-form-row">
    <button type="button" class="roles-button" onclick="window.location.href='{{ url('/usuarios/crear') }}'">Registrar nuevo usuario</button>
    <button type="button" class="roles-button" onclick="window.location.href='{{ route('users.index') }}'">Lista de usuarios registrados</button>
  </div>
</form>

    
<section class="tabla-productos">
    <div class="tabla-responsive">
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
</section>
  </div>


</html>


@endcan
@endsection