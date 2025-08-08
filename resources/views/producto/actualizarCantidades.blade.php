@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
    <form>
    <h2 class="titulo-tabla">Actualizar cantidades de productos</h2>
    <button type="button" class="barra-busqueda-boton" onclick="window.location.href='{{ route('producto.index') }}'">Listado de productos</button>
    </form>
    <form action="{{ route('productos.actualizar.cantidades') }}" method="POST">
        @csrf

        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Nueva Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}</td>
                            <td>
                                <input 
                                    type="number" 
                                    name="cantidades[{{ $producto->id }}]" 
                                    value="{{ $producto->cantidad }}" 
                                    min="0" 
                                    class="barra-busqueda-input" 
                                    style="width: 100px;"
                                >
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" class="barra-busqueda-boton">Guardar cambios</button>
        </div>
    </form>
</section>

@endsection
