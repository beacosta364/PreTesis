@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h2>Movimiento de Productos</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card p-4">
        <form action="{{ route('producto.procesarMovimiento') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="busqueda" class="form-label">Buscar Producto</label>
                <input type="text" id="busqueda" class="form-control" placeholder="Escribe el nombre del producto..." onkeyup="filtrarProductos()">
            </div>

            <div class="mb-3">
                <label for="producto_id" class="form-label">Seleccione un Producto</label>
                <select name="producto_id" id="producto_id" class="form-select">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo de Movimiento</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_movimiento" value="ingresar" required>
                    <label class="form-check-label">Ingresar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo_movimiento" value="extraer" required>
                    <label class="form-check-label">Extraer</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Movimiento</button>
        </form>
    </div>
</div>

<script>
    function filtrarProductos() {
        let filtro = document.getElementById("busqueda").value.toLowerCase();
        let opciones = document.getElementById("producto_id").options;
        
        for (let i = 0; i < opciones.length; i++) {
            let texto = opciones[i].text.toLowerCase();
            opciones[i].style.display = texto.includes(filtro) ? "" : "none";
        }
    }
</script>
@endsection
