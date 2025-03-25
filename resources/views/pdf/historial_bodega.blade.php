<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Historial de Accesos a la Bodega</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Historial de Accesos a la Bodega</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre del Usuario</th>
                <th>Acción</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->nombre_usuario }}</td>
                    <td>{{ $registro->accion }}</td>
                    <td>{{ $registro->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
