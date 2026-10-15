<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-base-200 min-h-screen">
    <div class="max-w-xl mx-auto p-6">
        <a href="{{ route('materia.index') }}" class="btn btn-ghost btn-sm mb-4">← Regresar</a>

        @if (session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <div class="card bg-base-100 shadow-md">
            <div class="card-body">
                <h1 class="card-title text-2xl">Detalle de la materia</h1>

                <div class="space-y-3 mt-2">
                    <div>
                        <p class="text-sm opacity-60">Nombre</p>
                        <p class="text-lg font-semibold">{{ $materia->nombre }}</p>
                    </div>
                    <div>
                        <p class="text-sm opacity-60">Créditos</p>
                        <p class="text-lg font-semibold">{{ $materia->creditos }}</p>
                    </div>
                    <div>
                        <p class="text-sm opacity-60">Profesor</p>
                        <p class="text-lg font-semibold">{{ $materia->profesor }}</p>
                    </div>
                </div>

                <div class="card-actions mt-6">
                    <a href="{{ route('materia.edit', $materia) }}" class="btn btn-warning">Editar</a>

                    <form action="{{ route('materia.destroy', $materia) }}" method="POST"
                          onsubmit="return confirm('¿Seguro que deseas eliminar esta materia?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-error">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>