@extends('layouts.plantilla')

@section('contenido')


<nav class="nav-botones">
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ route('movimientos.pdf') }}" target="_blank" class="nav-link btn-generar-pdf">Generar PDF</a>
        </li>
        <li class="nav-item">
            <h2>Registro de movimientos realizados</h2>
        </li>
    </ul>
    </nav>

<table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Usuario</th>
            <th>Tipo de Movimiento</th>
            <th>Cantidad</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movimientos as $movimiento)
            <tr>
                <td>{{ $movimiento->producto->nombre ?? 'Producto eliminado' }}</td>
                <td>{{ $movimiento->usuario->name ?? 'Usuario eliminado' }}</td>
                <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
                <td>{{ $movimiento->cantidad }}</td>
                <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Paginación -->
{{ $movimientos->links() }}

@endsection




