@extends('layouts.plantilla')

@section('contenido')

<h2>Registro de movimientos realizados</h2>
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




