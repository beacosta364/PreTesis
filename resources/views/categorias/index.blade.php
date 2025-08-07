@extends('layouts.plantilla')

@section('contenido')


<section class="container-tabla">
    <section>
    <h2 class="titulo-tabla"> Categorias</h2>
    @can('categoria.create')
    <nav class="nav-botones-productos">
        <ul class="nav-menu-productos">
            <li class="nav-item-productos">
                <a href="{{ route('categoria.create') }}" class="agregar-producto">Agregar Categoria</a>
            </li>
        </ul>
    </nav>
    @endcan
    </section>
<section class="tabla-productos">
    <div class="tabla-responsive">
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <!-- <th>Descripción</th> -->
                <!-- <th>Status</th>               -->
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>                
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <!-- <td> {{$categoria->descripción}}</td> -->
                <!-- <td>{{$categoria->status}}</td> -->
                <td >
                <a href="{{route('categoria.show',[$categoria->id])}}">
                    <!-- <img src="img/Vista.png" alt=""> -->
                    <img src="{{ asset('img/Vista.png') }}" alt="vista" width="50" height="50">
                </a>

                @can('categoria.update')
                <a href="{{route('categoria.edit',[$categoria->id])}}">
                    <!-- <img src="img/Editar.png" alt=""> -->
                    <img src="{{ asset('img/Editar.png') }}" alt="editar" width="50" height="50">
                </a>
                @endcan

                <a href="{{route('categoria.destroy',[$categoria->id])}}">               
                </a>

                @can('categoria.destroy')
                <form action="{{route('categoria.destroy',[$categoria->id])}}" method="POST" onsubmit="return confimarEliminacion()">
                
                    {{-- permite gemrar el token para enviar por post --}}
                    @csrf
                    {{-- agregar metodo delete --}}
                    @method('DELETE')
                    <!-- <input type="image"src="img/Eliminar.png"></input> -->
                    <!-- <input type="image" src="{{ asset('img/Eliminar.png') }}"> -->
                    <input type="image" src="{{ asset('img/Eliminar.png') }}" alt="elimianr" width="50" height="50">

                 </form>
                 @endcan
                 <script>
                    function confimarEliminacion() {
                        return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
                    }
                </script>
                </td>                                
            </tr>
            @endforeach          
        </tbody>
    </table>
   </div>
</section>
    <script>
        function confirmarEliminacion() {
            return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
        }
    </script>
 
</section>
   
@endsection


