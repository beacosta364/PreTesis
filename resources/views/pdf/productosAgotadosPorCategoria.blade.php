<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos Agotados / Por Agotarse</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #444;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Productos Agotados o por Agotarse</h2>
    <p><strong>Categoría:</strong> {{ $categoriaNombre }}</p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th>Stock mínimo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productosAgotados as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->min_stock ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay productos agotados o por agotarse en esta categoría.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
