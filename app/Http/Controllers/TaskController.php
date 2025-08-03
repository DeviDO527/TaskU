<?php

namespace App\Http\Controllers;
use App\Http\Requests\createTask;
use App\Models\category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class TaskController extends Controller
{
    public function getTasks()
    {
        try { // Obtiene el usuario autenticado
            $user = FacadesAuth::user();
            // Validamos si el usuario está activo
            if (!$user || !$user->active) {
                return redirect('/login')->withErrors(['error' => 'Unauthorized or inactive user.']);
            }

            // Obtenemos las tareas solo si el usuario está activo
            $tasks = $user->tasks;

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
            $validatedData = $request->validated();

            // Buscar categoría existente o crear una nueva
            $category = Category::firstOrCreate(
                ['name' => $validatedData['category']], // condición
                ['active' => true, 'created_at' => now(), 'updated_at' => now()] // valores por defecto si no existe
            );

            // Crear la tarea
            Task::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'user_id' => FacadesAuth::id(),  // Usuario autenticado
                'category_id' => $category->id,  // ID de la categoría
                'due_date' => $validatedData['due_date'] ?? null,
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
                'active' => true,
            ]);
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
