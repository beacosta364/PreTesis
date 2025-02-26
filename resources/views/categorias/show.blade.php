
@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
    <h2 class="titulo-tabla"> Detalles de la Categoría</h2>
    <table>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td >{{ $categoria->id }}</td>
                </tr>
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td >{{ $categoria->nombre }}</td>
                </tr>
                <tr>
                    <td><strong>Descripción:</strong></td>
                    <td >{{ $categoria->descripcion }}</td>
                </tr>
                <tr>
                    <td><strong>Estado:</strong></td>
                    <td >{{ $categoria->status == 1 ? 'Activo' : 'Inactivo' }}</td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <a class="btn-volver" href="{{ route('categoria.index') }}">Volver a la lista de categorías</a>
        </div>

</section>

@endsection
