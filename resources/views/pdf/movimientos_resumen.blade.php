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

        p {
            text-align: center;
            font-size: 12px;
            margin: 0;
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
    <h2>Resumen de Movimientos</h2>
    <p>
        @if(request()->filled('fecha_inicio') && request()->filled('fecha_fin'))
            Rango: {{ \Carbon\Carbon::parse($fechaInicio)->format('d/m/Y') }} 
            - {{ \Carbon\Carbon::parse($fechaFin)->format('d/m/Y') }}
        @else
            Últimos 30 días (desde {{ \Carbon\Carbon::parse($fechaInicio)->format('d/m/Y') }})
        @endif
    </p>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Total Ingresado</th>
                <th>Total Extraído</th>
                <th>total existencia</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movimientos as $m)
                <tr>
                    <td>{{ $m->nombre_producto }}</td>
                    <td>{{ $m->total_ingresado }}</td>
                    <td>{{ $m->total_extraido }}</td>
                    <td>{{ $m->total_existencia }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No se encontraron movimientos con los filtros aplicados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

