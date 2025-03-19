<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos Agotados</title>
    <link rel="stylesheet" href="{{ public_path('css/tabla-pdf.css') }}">
</head>
<body class="pdf pdf-productos">   
    <div class="header">
        <div class="header-left">
            <img src="{{ public_path('img/LogoABY.jpeg') }}" alt="Logo" class="logo">
        </div>
        <div class="header-right">
            <h1>Productos Agotados o Por Agotarse</h1>
        </div>
    </div>

    <section class="container-tabla">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Stock Mínimo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productosAgotados as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->min_stock }}</td>
                </tr>
                @endforeach  
            </tbody>
        </table>
    </section>

    <div class="footer">
        Fecha del reporte: {{ date('d/m/Y') }}
    </div>
</body>
</html>
