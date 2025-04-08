@extends('layouts.plantilla')

@section('contenido')
@can('productos.update')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Editar Producto</h2>
        <form action="{{ route('producto.update', $producto->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" required value="{{ $producto->nombre }}">
            </div>

            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4">{{ $producto->descripcion }}</textarea>
            </div>

            <!-- Campo Cantidad -->
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" required value="{{ $producto->cantidad }}">
            </div>

            <!-- Campo Stock Mínimo -->
            <div class="form-group">
                <label for="min_stock">Stock Mínimo</label>
                <input type="number" id="min_stock" name="min_stock" required value="{{ $producto->min_stock }}">
            </div>

            <!-- Campo Imagen -->
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen">
            </div>

            <!-- Campo Categoría -->
            <div class="form-group">
                <label for="categoria_id">Categoría</label>
                <select id="categoria_id" name="categoria_id" required>
                    <option value="" disabled>Categoría:</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->categoria_id ? 'selected' : 'Sin categoria' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Producto</button>
            </div>
        </form>
    </div>
</div>
@endcan
@endsection
