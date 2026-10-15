<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-base-200 min-h-screen">
    <div class="max-w-4xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">📚 Materias</h1>
            <a href="{{ route('materia.create') }}" class="btn btn-primary">+ Nueva materia</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="card bg-base-100 shadow-md">
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Créditos</th>
                            <th>Profesor</th>
                            <th class="text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($materias as $materia)
                            <tr>
                                <td>{{ $materia->nombre }}</td>
                                <td><span class="badge badge-primary">{{ $materia->creditos }}</span></td>
                                <td>{{ $materia->profesor }}</td>
                                <td class="text-right">
                                    <a href="{{ route('materia.show', $materia) }}" class="btn btn-info btn-sm">Ver detalle</a>
                                    <a href="{{ route('materia.edit', $materia) }}" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-6">No hay materias registradas.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>