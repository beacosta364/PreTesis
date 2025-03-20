@extends('layouts.plantilla')

@section('contenido')
<div class="container mt-5">
    <h2 class="mb-4">Registro de movimientos realizados</h2>
    <a href="{{ route('movimientos.pdf', request()->all()) }}" class="btn btn-danger mt-3" target="_blank">Generar PDF</a>
    <form method="GET" action="{{ route('movimientos.filtrar') }}">
        <div class="row">
            <div class="col-md-2">
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" value="{{ request('fecha_inicio') }}">
            </div>
            <div class="col-md-2">
                <label for="fecha_fin">Fecha Fin</label>
                <input type="date" class="form-control" name="fecha_fin" value="{{ request('fecha_fin') }}">
            </div>
            <div class="col-md-2">
                <label for="buscar_producto">Buscar Producto</label>
                <input type="text" id="buscar_producto" class="form-control" placeholder="Escribe para buscar...">
                <label for="producto_id">Producto</label>
                <select name="producto_id" id="producto_id" class="form-control">
                    <option value="">Todos</option>
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->nombre_producto }}" {{ request('producto_id') == $producto->nombre_producto ? 'selected' : '' }}>
                            {{ $producto->nombre_producto }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label for="buscar_usuario">Buscar Usuario</label>
                <input type="text" id="buscar_usuario" class="form-control" placeholder="Escribe para buscar...">
                <label for="usuario_id">Usuario</label>
                <select name="usuario_id" id="usuario_id" class="form-control">
                    <option value="">Todos</option>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->nombre_usuario }}" {{ request('usuario_id') == $usuario->nombre_usuario ? 'selected' : '' }}>
                            {{ $usuario->nombre_usuario }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label for="tipo_movimiento">Tipo Movimiento</label>
                <select name="tipo_movimiento" class="form-control">
                    <option value="">Todos</option>
                    <option value="ingresar" {{ request('tipo_movimiento') == 'ingresar' ? 'selected' : '' }}>Ingresar</option>
                    <option value="extraer" {{ request('tipo_movimiento') == 'extraer' ? 'selected' : '' }}>Extraer</option>
                </select>
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
        </div>
    </form>

    <h3 class="mt-4">Resultados</h3>
    <table class="table table-striped">
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
            @foreach ($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->nombre_producto }}</td>
                    <td>{{ $movimiento->nombre_usuario }}</td>
                    <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
                    <td>{{ $movimiento->cantidad }}</td>
                    <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $movimientos->links() }}
</div>

<!-- JavaScript para búsqueda dinámica -->
<script>
    function filtrarOpciones(inputId, selectId) {
        document.getElementById(inputId).addEventListener('input', function() {
            let filtro = this.value.toLowerCase();
            let opciones = document.getElementById(selectId).options;

            for (let i = 1; i < opciones.length; i++) { // Ignoramos la opción "Todos"
                let texto = opciones[i].text.toLowerCase();
                opciones[i].style.display = texto.includes(filtro) ? '' : 'none';
            }
        });
    }

    // Aplicar la función a los filtros de productos y usuarios
    filtrarOpciones('buscar_producto', 'producto_id');
    filtrarOpciones('buscar_usuario', 'usuario_id');
</script>
@endsection
