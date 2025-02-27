@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
   <h2 class="titulo-tabla"> Listado de productos</h2>
 
   <nav class="nav-botones">
      <ul class="nav-menu">
          <li class="nav-item">
              <a href="{{ route('producto.create') }}" class="nav-link btn-agregar-producto">Agregar Producto</a>
          </li>
      </ul>
   </nav>

   <table>
       <thead>
           <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Imagen</th>
               <th>Descripción</th>
               <th>Categoría</th>
               <th>Cantidad</th>
               <th>Stock mínimo</th>
               <th>Usuario</th>
               <th>Opciones</th>
           </tr>
       </thead>
       <tbody class="tabla-productos">
         @foreach ($productos as $producto)
         <tr>                
             <td>{{ $producto->id }}</td>
             <td>{{ $producto->nombre }}</td>
             <td>
               <img src="{{ asset('img/'.$producto->imagen) }}" alt="{{ $producto->imagen }}">
             </td>
             <td>{{ $producto->descripcion }}</td>
             <td> 
               @if ($producto->categoria)
                   {{ $producto->categoria->nombre }}
               @else
                   Sin categoría
               @endif
             </td>
             <td>{{ $producto->cantidad }}</td>
             <td>{{ $producto->min_stock }}</td>
             <td>
               @if ($producto->usuario)
                   {{ $producto->usuario->name }}
               @else
                   Usuario eliminado
               @endif
             </td>
             <td>
              <a href="{{ route('producto.show', $producto->id) }}">
                 <img src="{{ asset('img/view.png') }}" alt="Ver">
              </a>
              <a href="{{ route('producto.edit', $producto->id) }}">
                 <img src="{{ asset('img/edit.png') }}" alt="Editar">
              </a>
              <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" onsubmit="return confirmarEliminacion()">
                 @csrf
                 @method('DELETE')
                 <input type="image" src="{{ asset('img/delete.png') }}" alt="Eliminar">
              </form>
             </td>                                
         </tr>
         @endforeach  
       </tbody>
   </table>

</section>

<script>
   function confirmarEliminacion() {
       return confirm('¿Seguro deseas eliminar?');
   }
</script>

@endsection
