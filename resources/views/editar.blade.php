<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar materia</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-base-200 min-h-screen">
    <div class="max-w-xl mx-auto p-6">
        <a href="{{ route('materia.show', $materia) }}" class="btn btn-ghost btn-sm mb-4">← Regresar</a>

        <div class="card bg-base-100 shadow-md">
            <div class="card-body">
                <h1 class="card-title text-2xl">Editar materia</h1>

                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul class="list-disc ml-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('materia.update', $materia) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="nombre" class="block mb-1 font-medium">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $materia->nombre) }}" class="input w-full">
                    </div>
                    <div>
                        <label for="creditos" class="block mb-1 font-medium">Créditos</label>
                        <input type="number" id="creditos" name="creditos" value="{{ old('creditos', $materia->creditos) }}" class="input w-full">
                    </div>
                    <div>
                        <label for="profesor" class="block mb-1 font-medium">Profesor</label>
                        <input type="text" id="profesor" name="profesor" value="{{ old('profesor', $materia->profesor) }}" class="input w-full">
                    </div>
                    <button type="submit" class="btn btn-primary w-full">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>