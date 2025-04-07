<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        // Script para alternar entre modo claro y oscuro
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <!-- Header común -->
    @include('layouts.header')

    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Lista de Tareas</h1>
        <button onclick="toggleDarkMode()" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Toggle Modo Oscuro</button>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Nueva Tarea</a>
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr>
                    <th class="py-2 text-gray-900 dark:text-gray-100">ID</th>
                    <th class="py-2 text-gray-900 dark:text-gray-100">Título</th>
                    <th class="py-2 text-gray-900 dark:text-gray-100">Descripción</th>
                    <th class="py-2 text-gray-900 dark:text-gray-100">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="bg-gray-100 dark:bg-gray-700">
                    <td class="border px-4 py-2 text-gray-900 dark:text-gray-100">{{ $task->id }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-gray-100">{{ $task->title }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-gray-100">{{ $task->description }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>