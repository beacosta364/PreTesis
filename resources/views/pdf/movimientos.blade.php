<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Movimientos</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Reporte de Movimientos</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Usuario</th>
                <th>Tipo Movimiento</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->nombre_producto }}</td>
                    <td>{{ $movimiento->nombre_usuario }}</td>
                    <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
                    <td>{{ $movimiento->cantidad }}</td>
                    <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>



<!-- 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Movimientos</title>
    <link rel="stylesheet" href="{{ public_path('css/tabla-pdf.css') }}">
</head>
<body class="pdf pdf-movimientos">   
    <div class="header">
        <div class="header-left">
            <img src="{{ public_path('img/LogoABY.jpeg') }}" alt="Logo" class="logo">
        </div>
        <div class="header-right">
            <h1>Registro de Movimientos</h1>
        </div>
    </div>

    <section class="container-tabla">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Usuario</th>
                    <th>Tipo de Movimiento</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->nombre_producto }}</td>
                    <td>{{ $movimiento->nombre_usuario }}</td>
                    <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
                    <td>{{ $movimiento->cantidad }}</td>
                    <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach  
            </tbody>
        </table>
    </section>

    <div class="footer">
        Fecha del reporte: {{ date('d/m/Y H:i') }}
    </div>
</body>
</html> -->
