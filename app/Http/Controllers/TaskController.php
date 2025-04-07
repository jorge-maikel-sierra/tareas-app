<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
            'status' => 'required|in:pendiente,en_progreso,completada'
        ]);

        auth()->user()->tasks()->create($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Tarea creada exitosamente');
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'status' => 'required|in:pendiente,en_progreso,completada'
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Tarea actualizada exitosamente');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Tarea eliminada exitosamente');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }
}