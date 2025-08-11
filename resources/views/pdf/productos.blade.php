<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos</title>
    <link rel="stylesheet" href="{{ public_path('css/tabla-pdf.css') }}">  
</head>
<body>
<div class="header">
    <div class="header-left">
        <img src="{{ base_path('public/img/LogoABY.jpeg') }}" alt="Logo" class="logo">
    </div>
    <div class="header-right">
        <h1>Reporte de Productos Existentes</h1>
    </div>
</div>

    <section class="container-tabla pdf">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Stock Mínimo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->min_stock }}</td>
                </tr>
                @endforeach  
            </tbody>
        </table>
    </section>

    <div class="footer">
        <p>Fecha del reporte: {{ date('d/m/Y') }}</p>
    </div>

</body>
</html>
