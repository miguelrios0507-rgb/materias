<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Materias</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('materia.create') }}" class="btn btn-primary mb-3">Nueva materia</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Créditos</th>
                <th>Profesor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($materias as $materia)
                <tr>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->creditos }}</td>
                    <td>{{ $materia->profesor }}</td>
                    <td>
                        <a href="{{ route('materia.show', $materia) }}" class="btn btn-info btn-sm">Ver detalle</a>
                        <a href="{{ route('materia.edit', $materia) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay materias registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>