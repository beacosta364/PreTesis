@extends('layouts.plantilla')

@section('contenido')
@can('categoria.create')
<div class= "container-formulario">
<div class="card formulario">
    <h2>Crear Nueva Categoría</h2>
    <form action="{{route('categoria.store')}}" method="POST">
        {{-- agregar directica para qu se genere un token --}}
        @csrf
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre de la Categoría</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    {{ $errors->first('nombre') }}
                </div>
            @endif
        </div>
        <!-- Campo Descripción -->
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4"></textarea>
        </div>
        <!-- Campo Status -->
        <div class="form-group">
            <label for="status">Estado</label>
            <select id="status" name="status" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Guardar Categoría</button>
            <button type="button" onclick="window.location.href='{{ route('categoria.index') }}'">Lista de categorias</button>
        </div>
    </form>
</div>
</div>
@endcan
@endsection