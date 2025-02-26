<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel-control</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-tablas.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-formularios.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>
<body>
    <!-- slidebar -->
    <aside class="slidebar" id="slidebar">
        <h2>My tienda</h2>
        <!-- Perfil -->
         <div class="element-slidebar">
            <div class="element-slidebar-btn profile">
                <!-- <span><img src="img/face1.png" alt="avatar"></span> -->
                <span><img src="{{asset('img/face1.jpg')}}" alt="avatar"></span>
                <p>{{Auth::user()->name}}</p>
            </div>
            <div class="element-slidebar-content">
                <a href="{{'profile.edit'}}">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Salir"class="logout-link">
                </form>
            </div>
        </div>
        <!-- Productos -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <!-- <span><img src="img/rokrt.png" alt="Product"></span> -->
                <span><img src="{{asset('img/rokrt.png')}}" alt="Product"></span>
                <!-- <span><img src="{{ asset('storage/rokrt.jpg') }}" alt="Product"></span> -->
                <p>Productos</p>
            </div>
            <div class="element-slidebar-content">
            <div class="element-slidebar-content">
                
                 <a href="">Todos</a>
                 <a href="">Agregar</a>
            </div>
            </div>
        </div>

        <!-- Categorias -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img/icono1.png')}}" alt="Product"></span>
                <p>Categorias</p>
            </div>
            <div class="element-slidebar-content">
            <div class="element-slidebar-content">
            <a href="{{ route('categoria.index') }}">Todos</a>
                <a href="{{ route('categoria.create') }}">Agregar</a>
            </div>
            </div>
        </div>

        <!-- Provedores -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <!-- <span><img src="img/provedores.png" alt="provedor"></span> -->
                <span><img src="{{asset('img/provedores.png')}}" alt="provedor"></span>
                
                <p>Provedores</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Todos</a>
                <a href="">Agregar</a>
            </div>
        </div>

        <!-- Comptras -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <!-- <span><img src="img/compras.png" alt="compras"></span> -->
                <span><img src="{{asset('img/compras.png')}}" alt="compras"></span>
                <p>Comptras</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Todos</a>
                <a href="">Agregar</a>
            </div>


        </div>
        <!-- Ventas -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <!-- <span><img src="img/ventas.png" alt="ventas"></span> -->
                <span><img src="{{asset('img/ventas copy.png')}}" alt="ventas"></span>
                <p>Ventas</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Todos</a>
                <a href="">Agregar</a>
            </div>
        </div>
    </aside>
    <!-- main -->
     <main class="main">
        <!-- header -->

        <header class="header">
            <h2>dasboard</h2>
            <button id="menu-toggle" class="menu-hamburger">☰</button>
        </header>

        <!-- Aqui se colocan todos los elementos cambiantes -->
        @yield('contenido')

     </main>
     <script src="{{asset('js/script.js')}}"></script>
</body>
</html>