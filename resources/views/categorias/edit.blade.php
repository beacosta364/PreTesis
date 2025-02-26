@extends('layouts.plantilla')

@section('contenido')

<div class="container-formulario">
    <div class="card formulario">
        <h2>Editar Categoría</h2>
        <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nombre">Nombre de la Categoría</label>
                <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4">{{ $categoria->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Estado</label>
                <select id="status" name="status" required>
                    <option value="1" {{ $categoria->status == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ $categoria->status == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Actualizar Categoría</button>
            </div>
        </form>
    </div>
</div>
@endsection
