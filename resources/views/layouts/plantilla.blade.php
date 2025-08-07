<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>panel-control</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-tablas.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-formularios.css') }}">
    <link rel="stylesheet" href="{{url('/css/estilos-movimiento-productos.css')}}">
    <link rel="stylesheet" href="{{url('/css/styles-perfil.css')}}">
    <link rel="stylesheet" href="{{url('/css/configuracion-acceso-bodega.css')}}">


    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite(['resources/js/app.js'])

    
</head>
<body>
    <!-- slidebar -->
    <aside class="slidebar" id="slidebar">
        <!-- <h2>My tienda</h2> -->
        <span class="logooo"><img src="{{asset('img/ABY.png')}}" alt="LOGO"></span>

        <!-- Logo Empresa -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn profile">
                <span><img src="{{asset('img2/LogoLaPapa.png')}}" alt="Logo"></span>
                <p>La Papa</p>
            </div>
        </div>
        <!-- Perfil -->
<div class="element-slidebar">
    <div class="element-slidebar-btn profile">
        <span>
            <img src="{{ Auth::user()->perfil && Auth::user()->perfil->foto_perfil !== 'face1.jpg'
                ? asset('img-perfil/' . Auth::user()->perfil->foto_perfil)
                : asset('img/face1.jpg') }}" alt="avatar">
        </span>
        <p>{{ Auth::user()->name }}</p>
    </div>
    <div class="element-slidebar-content">
        <a href="/profile">Perfil</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Salir" class="logout-link">
        </form>
    </div>
</div>


        <!-- Gestion del sistema -->
        
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img2\GestionIcono1.png')}}" alt="Gestion del sistema"></span>
                <p>Gestión del sistema</p>
            </div>
            <div class="element-slidebar-content">
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('notificaciones.index') }}">Notificaciones</a> 
                <a href="{{ route('producto.movimiento') }}">Gestión de inventario</a>
                <a href="{{ route('producto.agotados') }}">Ver productos agotados o por agotarse</a>
                @can('registrarusuarios.show')
                <a href="{{ url('/usuarios/crear') }}">Registrar nuevo usuario</a>  
                @endcan
                @can('vistausuarios.show')
                <a href="{{ route('users.index') }}">Lista de usuarios registrados</a>
                @endcan
                @can('rolusuarios.show')
                <a href="{{ url('/usuarios-roles') }}">Gestionar rol de usuarios</a>
                @endcan
            </div>
        </div>


        <!-- Productos -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/rokrt.png')}}" alt="Product"></span> -->
                    <span><img src="{{ asset('img2\ProductossIcono1.png') }}" alt="Gestion de productos"></span>
                    <p>Productos</p>
                </div>
                <div class="element-slidebar-content">
                    @can('productos.index')
                    <a href="{{ route('producto.index') }}">Todos</a>
                    @endcan
                    @can('productos.create')
                    <a href="{{ route('producto.create') }}">Agregar</a>
                    @endcan
                </div>
            </div>

        <!-- Categorias -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/icono1.png')}}" alt="Product"></span> -->
                    <span><img src="{{asset('img2\CategoriaIcono1.png')}}" alt="Gestión de las categorías"></span>
                    <p>Categorías</p>
                </div>
                <div class="element-slidebar-content">
                    @can('categoria.index')
                    <a href="{{ route('categoria.index') }}">Todas</a>
                    @endcan
                    @can('categoria.create')
                    <a href="{{ route('categoria.create') }}">Agregar</a>
                    @endcan
                </div>
            </div>

        <!-- notificaciones y seguridad -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img2\AccesoIcono1.png')}}" alt="Monitoreo y seguridad"></span>
                    <p>Ingresos a Bodega</p>
                </div>
                <div class="element-slidebar-content">  
                    <a href="{{ route('configuracion.control') }}">Ingresar a Bodega</a>
                    @can('ingreso.index')  
                    <a href="{{ route('bodega.historial') }}">Registro de ingreso a Bodega</a>
                    @endcan 
                </div>
            </div>

            <!-- Configuración-->
            @can('configuracion.show')  
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img2\ConfiguracionLogo1.png')}}" alt="Configuración"></span>
                    <p>Configuración</p>
                </div>
                @can('configuracion.show')  
                <div class="element-slidebar-content">
                    <a href="{{ route('configuracion.create') }}">Configuración IP</a>
                </div>
                @endcan
            </div>
            @endcan

            <!-- Reportes -->  
            @can('reportes.show')  
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img2\ReportesIcono1.png')}}" alt="Reportes"></span>
                <p>Reportes</p>
            </div>
            
            <div class="element-slidebar-content"> 
                @can('reporteinventarios.show')        
                <a href="{{ url('/productos-listado') }}">Reportes de inventario</a>
                @endcan
                @can('reportemovimientos.show')
                 <a href="{{ route('movimientos.filtrar') }}">Reportes de movimiento</a>
                @endcan
            </div> 
              
        </div>
        @endcan 
    </aside>


    <!-- main -->
     <main class="main">
        <!-- header -->

        <header class="header">
            <!-- <h2>dasboard</h2> -->
            <button id="menu-toggle" class="menu-hamburger">☰</button>
        </header>

        <!-- Aqui se colocan todos los elementos cambiantes -->
        @yield('contenido')

     </main>
     <script src="{{asset('js/script.js')}}"></script>
</body>
</html>