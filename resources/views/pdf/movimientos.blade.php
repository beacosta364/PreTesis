<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h2 {
            color: #e75b1e;
            text-align: center;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
        }

        th {
            background-color: #e49236;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Movimientos Registrados</h2>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Usuario</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->nombre_producto }}</td>
                    <td>{{ $movimiento->nombre_usuario }}</td>
                    <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
                    <td>{{ $movimiento->cantidad }}</td>
                    <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No se encontraron movimientos con los filtros aplicados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
