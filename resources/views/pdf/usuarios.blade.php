<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
    <link rel="stylesheet" href="{{ public_path('css/tabla-pdf.css') }}">
</head>
<body class="pdf-usuarios">
    <div class="header">
        <div class="header-left">
            <img src="{{ public_path('img/LogoABY.jpeg') }}" alt="Logo" class="logo">
        </div>
        <div class="header-right">
            <h1>Reporte de Usuarios Registrados</h1>
        </div>
    </div>

    <section class="container-tabla">
        <!-- <h2 class="titulo-tabla">Lista de Usuarios</h2> -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
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
