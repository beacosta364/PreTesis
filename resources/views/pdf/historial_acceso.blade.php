<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Historial de Acceso</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; }
        th { background-color: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Historial de Acceso a Bodega</h2>
    <table>
        <thead>
            <tr>
                <th>Controlador</th>
                <th>IP</th>
                <th>Usuario (ID)</th>
                <th>Nombre Usuario</th>
                <th>Estado</th>
                <th>Fecha/Hora</th>
            </tr>
        </thead>
        <tbody>
            @forelse($acciones as $a)
                <tr>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->ip }}</td>
                    <td>{{ $a->user_id ?? '-' }}</td>
                    <td>{{ $a->nombre_usuario ?? 'Invitado' }}</td>
                    <td>{{ ucfirst($a->estado) }}</td>
                    <td>{{ $a->fecha_hora }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No se encontraron registros con los filtros aplicados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
