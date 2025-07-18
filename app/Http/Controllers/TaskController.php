<?php

namespace App\Http\Controllers;

use App\Http\Requests\createTask;
use App\Models\Task;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class TaskController extends Controller
{
    public function getTasks()
    {
        try {
            $user = FacadesAuth::user(); // Obtiene el usuario autenticado

            // Validamos si el usuario está activo
            if (!$user || !$user->active) {
                return redirect('/login')->withErrors(['error' => 'Unauthorized or inactive user.']);
            }

            // Obtenemos las tareas solo si el usuario está activo
            $tasks = Task::where('user_id', $user->id)->get();

            return view('dashboard', compact('tasks'));

        } catch (\Throwable $e) {
            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
    public function createTask(createTask $request)
    {
        try {
            $validatedData = $request->safe();
            $task = new Task($validatedData);
            $task->user_id = FacadesAuth::id(); // Asignar el ID del usuario autenticado
            $task->cathegory_id = $request->input('category_id'); // Asignar la categoría si se proporciona
            $task->save();

            return redirect()->back()->with('success', 'Task created successfully.');
        } catch (\Throwable $e) {
            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
