<?php

namespace App\Http\Controllers;

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

}
