@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <img src="img2\Naraja.png" alt=" ">
        <div class="cabecera-text">
        <a href="{{ route('producto.movimiento') }}">Gestion de inventario</a>
    </div> 
    </div>
        
    </div>
    
            
    </div>
        <div class="card">
            <div class="cabecera">
                <img src="{{ asset('img2\ProductossIcono1Naranja.png') }}" alt="">
            <div class="cabecera-text">
            <h3>{{ $totalProductos }} productos registrados</h3>
            </div>
            </div>
            <a href="{{ route('producto.index') }}">Todos</a>
        </div>
        
        @can('vistausuarios.show')
        </div>
           <!-- Configuración y soporte -->
           
           <div class="card">
            <div class="cabecera">
                <img src="img2\UsuariosIcono.Naranja.png" alt="">
                <div class="cabecera-text">
                </div>
                <h3>{{ $totalUsuarios }} usuarios registrados</h3>
            </div>
            <a href="{{ route('users.index') }}">Usuarios registrados</a>
        </div>   
        @endcan

        <!-- Reportes -->
        <div class="card">
            <div class="cabecera">
                <img src="img2\ReportesIcono1Naranjas.png" alt="">
                <div class="cabecera-text"> 
                </div>  
                <h3>Se han realizado {{ $movimientosMes }} movimientos este mes</h3>
            </div>
            @can('reportemovimientos.show')
            <a href="{{ route('movimientos.filtrar') }}">Reportes de movimientos</a>
            @endcan
         </div>

    </section >

    <section class="container-cards">
    <section>
    <h2>Productos agotados o por agotarse por categoría</h2>

    <form method="GET" action="{{ route('dashboard') }}">
        <label for="categoria">Selecciona una categoría:</label>
        <select name="categoria" id="categoria" onchange="this.form.submit()">
            <option value="todas" {{ ($categoriaSeleccionada == 'todas' || !$categoriaSeleccionada) ? 'selected' : '' }}>Todas</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoriaSeleccionada == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Botón para generar el PDF -->
     <!--target="_blank" para abrir el pdf en una pestaña nueva -->
    <form method="GET" action="{{ route('pdf.productos.agotados.categoria') }}" target="_blank"> 
    <input type="hidden" name="categoria" value="{{ $categoriaSeleccionada ?? 'todas' }}">
    <button type="submit">Generar PDF</button>
    </form>



    <div class="productos-resultado">
        @forelse($productosFiltrados as $producto)
            <div class="producto-card">
                <strong>{{ $producto->nombre }}</strong> - 
                {{ $producto->categoria->nombre ?? 'Sin categoría' }} |
                Cantidad: {{ $producto->cantidad }} |
                Stock mínimo: {{ $producto->min_stock ?? 'No definido' }}
            </div>
        @empty
            <p>No hay productos agotados o por agotarse en esta categoría.</p>
        @endforelse
    </div>
</section>

        
<section>
    <h2>Notificaciones</h2>

    @can('notificaciones.create')
    <!-- Formulario para agregar una nueva notificación -->
    <form action="{{ route('notificaciones.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required>
        <label>Mensaje:</label>
        <textarea name="mensaje" required></textarea>
        <button type="submit">Crear Notificación</button>
    </form>

    <!-- Mensajes de éxito -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @endcan
    <!-- Listado de notificaciones -->
    <h3>Lista de Notificaciones</h3>
    <ul>
        @foreach($notificaciones as $notificacion)
            <li>
                <strong>{{ $notificacion->titulo }}</strong>: {{ $notificacion->mensaje }}  
                <small>{{ $notificacion->created_at }}</small>
                @can('notificaciones.update')
                <a href="{{ route('notificaciones.edit', $notificacion->id) }}">Editar</a>
                @endcan
                @can('notificaciones.destroy')
                <form action="{{ route('notificaciones.destroy', $notificacion->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
                @endcan
            </li>
        @endforeach
    </ul>
</section>


@endsection