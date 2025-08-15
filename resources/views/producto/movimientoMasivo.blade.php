@extends('layouts.plantilla')

@section('contenido')
<link rel="stylesheet" href="{{url('/css/estilos-movimiento-masivo.css')}}">
<section>
    <section>
        <h2 class="titulo-mv">Movimiento Masivo de Productos</h2>

    <form method="GET" action="{{ route('producto.movimientoMasivo') }}" class="barra-busqueda-form">
        <select name="categoria">
            <option value="">-- Todas las categorías --</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ (request('categoria') == $categoria->id) ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="barra-busqueda-boton">Buscar</button>
    </form>  
    </section>

    <section>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('producto.procesarMovimientoMasivo') }}" method="POST">
            @csrf

            <div class="tipo-movimiento">
                <label class="form-label">Tipo de Movimiento</label><br>
                <div class="opcion">
                    <input type="radio" name="tipo_movimiento" value="ingresar" required>
                    <label>Ingresar</label>
                </div>
                <div class="opcion">
                    <input type="radio" name="tipo_movimiento" value="extraer" required>
                    <label>Extraer</label>
                </div>
            </div>

        <div class="tabla-productoss-container">
            <table class="tabla-productoss">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Disponible</th>
                        <th>Cantidad a mover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>
                            <input type="number" name="cantidades[{{ $producto->id }}]" min="0" value="0">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Movimientos</button>
        </form>
    </section>
</section>
@endsection