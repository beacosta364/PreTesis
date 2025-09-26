@extends('layouts.plantilla')

@section('contenido')
<!DOCTYPE html>
<html>
<head>
    <title>Control de acceso a bodega </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1 class="h1controlador">Control de acceso a bodega </h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Formulario para configurar controlador -->
    @can('controlador.create')
    <div class="card mb-4">
        <div class="card-header">Configurar Controlador</div>
        <div class="card-body">
            <form method="POST" action="{{ route('guardar.ip') }}">
                @csrf
                <div class="mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label>IP del Controlador</label>
                    <input type="text" name="ip" class="form-control" required>
                </div>
                <button class="boton-cancelar">Guardar</button>
            </form>
        </div>
    </div>
    @endcan

    <!-- Lista de controladores -->
    <h2 class="h2controlador">Controladores de ingreso a bodega registrados</h2>
    <ul class="list-group mb-4">
        @foreach($controladores as $c)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $c->nombre ?? 'Sin nombre' }} ({{ $c->ip }})
                </div>
                <div class="d-flex gap-2">
                    @can('controlador.open')
                    <a href="{{ route('abrir', $c->id) }}" class="btn-custom btn-success-custom">Abrir</a>
                    @endcan

                    @can('controlador.edit')
                    <a href="{{ route('editar', $c->id) }}" class="btn-custom btn-warning-custom">Editar</a>
                    @endcan

                    @can('controlador.delete')
                    <form method="POST" action="{{ route('eliminar', $c->id) }}" onsubmit="return confirm('¿Seguro que deseas eliminar este controlador?');" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-custom btn-danger-custom">Eliminar</button>
                    </form>
                    @endcan
                </div>

            </li>
        @endforeach
    </ul>


    <!-- Historial de acciones -->
    @can('acciones.show')
<h2 class="h2controlador">Historial de acceso</h2>
<!-- Formulario de filtros -->
<!-- <form method="GET" action="{{ route('bodega.home') }}" class="row g-3 mb-3">
    <div class="col-md-3">
        <label>Usuario</label>
        <input type="text" name="usuario" value="{{ request('usuario') }}" class="form-control">
    </div>
    <div class="col-md-2">
        <label>Estado</label>
        <select name="estado" class="form-select">
            <option value="">Todos</option>
            <option value="exitoso" {{ request('estado')=='exitoso' ? 'selected' : '' }}>Exitoso</option>
            <option value="fallido" {{ request('estado')=='fallido' ? 'selected' : '' }}>Fallido</option>
        </select>
    </div>
    <div class="col-md-3">
        <label>Controlador</label>
        <input type="text" name="controlador" value="{{ request('controlador') }}" class="form-control">
    </div>
    <div class="col-md-2">
        <label>Desde</label>
        <input type="date" name="desde" value="{{ request('desde') }}" class="form-control">
    </div>
    <div class="col-md-2">
        <label>Hasta</label>
        <input type="date" name="hasta" value="{{ request('hasta') }}" class="form-control">
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Filtrar</button>
        <a href="{{ route('bodega.home') }}" class="btn btn-secondary">Limpiar</a>
    </div>
</form> -->
<form method="GET" action="{{ route('bodega.home') }}" class="filtros-formulario">
    <div class="filtro-campo">
        <label>Usuario</label>
        <input type="text" name="usuario" value="{{ request('usuario') }}" class="filtro-input">
    </div>
    <div class="filtro-campo">
        <label>Estado</label>
        <select name="estado" class="filtro-select">
            <option value="">Todos</option>
            <option value="exitoso" {{ request('estado')=='exitoso' ? 'selected' : '' }}>Exitoso</option>
            <option value="fallido" {{ request('estado')=='fallido' ? 'selected' : '' }}>Fallido</option>
        </select>
    </div>
    <div class="filtro-campo">
        <label>Controlador</label>
        <input type="text" name="controlador" value="{{ request('controlador') }}" class="filtro-input">
    </div>
    <div class="filtro-campo">
        <label>Desde</label>
        <input type="date" name="desde" value="{{ request('desde') }}" class="filtro-input">
    </div>
    <div class="filtro-campo">
        <label>Hasta</label>
        <input type="date" name="hasta" value="{{ request('hasta') }}" class="filtro-input">
    </div>
    <div class="filtro-botones">
        <button type="submit" class="btn-filtro btn-filtrar">Filtrar</button>
        <a href="{{ route('bodega.home') }}" class="btn-filtro btn-limpiar">Limpiar</a>
    </div>
</form>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Controlador</th>
            <th>IP</th>
            <th>Usuario (ID)</th>
            <th>Nombre Usuario</th>
            <th>Estado</th>
            <th>Fecha/Hora</th>
        </tr>
    </thead>
    <tbody>
        @foreach($acciones as $a)
            <tr>
                <td>{{ $a->nombre }}</td>
                <td>{{ $a->ip }}</td>
                <td>{{ $a->user_id ?? '-' }}</td>
                <td>{{ $a->nombre_usuario ?? 'Invitado' }}</td>
                <td>{{ ucfirst($a->estado) }}</td>
                <td>{{ $a->fecha_hora }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Links de paginación -->
<div class="d-flex justify-content-center">
    <!-- {{ $acciones->links() }} -->
    {{ $acciones->links('pagination::bootstrap-5') }}
</div>
@endcan
</body>
</html>
@endsection