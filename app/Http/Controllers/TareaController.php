<?php
// CRUD de tareas

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return response()->json($tareas);
    }

    public function store(Request $request)
    {
        $tarea = Tarea::create($request->all());
        return response()->json($tarea, 201);
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);
        if (!$tarea) {
            return response()->json(['mensaje' => 'Tarea no encontrada'], 404);
        }
        return response()->json($tarea);
    }

    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        if (!$tarea) {
            return response()->json(['mensaje' => 'Tarea no encontrada'], 404);
        }
        $tarea->update($request->all());
        return response()->json($tarea);
    }

    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        if (!$tarea) {
            return response()->json(['mensaje' => 'Tarea no encontrada'], 404);
        }
        $tarea->delete();
        return response()->json(['mensaje' => 'Tarea eliminada']);
    }
}
