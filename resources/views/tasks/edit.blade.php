<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Tarea') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('tasks.update', $task) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
                            <input type="text" name="title" id="title" value="{{ $task->title }}" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descripción</label>
                            <textarea name="description" id="description" class="mt-1 block w-full">{{ $task->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="due_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fecha de vencimiento</label>
                            <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estado</label>
                            <select name="status" id="status" class="mt-1 block w-full" required>
                                <option value="pendiente" {{ $task->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="en_progreso" {{ $task->status == 'en_progreso' ? 'selected' : '' }}>En Progreso</option>
                                <option value="completada" {{ $task->status == 'completada' ? 'selected' : '' }}>Completada</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 