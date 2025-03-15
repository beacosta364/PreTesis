@extends('layouts.plantilla')

@section('contenido')
<div class="container mt-5">
    <h2 class="mb-4">Lista de Usuarios y sus Roles</h2>
    <table class="table table-striped">
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
                            <select name="role_id" class="form-select">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        {{ $usuario->role_id == $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                    </td>
                    <td>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    


@endsection


<!-- <div class="container mt-5">
        <h2 class="mb-4">Lista de Usuarios y sus Roles</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->role_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->