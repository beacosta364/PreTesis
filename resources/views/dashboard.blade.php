@extends('layouts.plantilla')

@section('contenido')

<!-- Bootstrap CSS "modificar para el boton slidebar"-->
<link rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
        <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/home/colors/orange.css') }}" />

        <!-- Modernizer -->
        <script src="{{ asset('js/home/modernizer.js') }}"></script>

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



    <!-- <div class="productos-resultado">
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
    </div> -->
    <div class="productos-resultado">
        @if($productosFiltrados->count())
            <table class="tabla-productoss">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Cantidad</th>
                        <th>Stock mínimo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productosFiltrados as $producto)
                        <tr>
                            <td><strong>{{ $producto->nombre }}</strong></td>
                            <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->min_stock ?? 'No definido' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay productos agotados o por agotarse en esta categoría.</p>
        @endif
    </div>


</section>


<section>
    <h2>Notificaciones</h2>

    @can('notificaciones.create')
    <!-- Formulario para agregar una nueva notificación -->
    <form action="{{ route('notificaciones.store') }}" method="POST">
    <div class="form-box">
        <h4>
        @csrf
        <input type="text" name="titulo" placeholder="Título" required>
        <input style="height: 100px;" type="text" name="mensaje" placeholder="Mensaje" required></textarea>
        <div style="text-align: center; margin-top: 10px;">
        <button class="hvr-underline-from-center" id="submit" type="submit">Crear Notificación</button>
        </div>
        </h4>
    </div>
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
                <a href="{{ route('notificaciones.edit', $notificacion->id) }}" class="boton_notificacion">Editar</a>
                @endcan
                @can('notificaciones.destroy')
                <form action="{{ route('notificaciones.destroy', $notificacion->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro?')" class="boton_notificacion" >Eliminar</button>
                </form>
                @endcan
            </li>
        @endforeach
    </ul>
</section>


@endsection