@extends('layouts.plantilla')

@section('contenido')
    <h2>Historial de Accesos a la Bodega</h2>

    @if ($registros->count())
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre del Usuario</th>
                    <th>Acción</th>
                    <th>Fecha y Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $registro->nombre_usuario }}</td>
                        <td>{{ $registro->accion }}</td>
                        <td>{{ $registro->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros en la base de datos.</p>
    @endif
@endsection
