@extends('layouts.plantilla')

@section('contenido')
@can('productos.create')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Crear Nuevo Producto</h2>
        <form action="{{ route('producto.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"></textarea>
                <!-- <textarea id="descripcion" name="descripcion" rows="4" required>{{ old('descripcion') }}</textarea> 
                @error('descripcion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror-->
            </div>

            <!-- Campo Cantidad -->
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </div>

            <!-- Campo Stock Mínimo -->
            <div class="form-group">
                <label for="min_stock">Stock Mínimo</label>
                <input type="number" id="min_stock" name="min_stock" required>
            </div>

            <!-- Campo Imagen -->
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen">
            </div>

            <!-- Campo Categoría -->
            <div class="form-group">
                <label for="id_categoria">Categoría</label>
                <select name="categoria_id" id="categoria_id" required>
                    <option value="" disabled selected>Seleccione una categoría</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>

            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Guardar Producto</button>
            </div>
        </form>
    </div>
</div>
@endcan
@endsection
