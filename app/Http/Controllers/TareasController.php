<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Essa\APIToolKit\Api\ApiResponse;
use App\Models\Tarea;
use Illuminate\Support\Facades\DB;

class TareasController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tarea::all();
/*
        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
        */
        return $this->responseSuccess('Todas las tareas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'completada' => 'boolean',
            'fecha_limite' => 'required|date|after_or_equal:today',
        ]);

        $tarea = Tarea::create($validated);
        return $this->responseSuccess('Tarea creada', $tarea);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        return $this->responseSuccess('Tarea', $tarea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //DB::transaction(function () use ($request, $id) { // inicio de la transaccion
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'completada' => 'boolean',
            'fecha_limite' => 'required|date|after_or_equal:today',
        ]);

        $tarea = Tarea::findOrFail($id);
        $tarea->update([
            'titulo' => $validated['titulo'],
            'descripcion' => $validated['descripcion'],
            'completada' => $validated['completada'],
            'fecha_limite' => $validated['fecha_limite'],
        ]);
        return $this->responseSuccess('Tarea actualizada', $tarea);
    //}); // fin de la transaccion
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $tarea = Tarea::find($id);
        if ($tarea) {
            $tarea->delete();
            return $this->responseSuccess('Tarea eliminada', $tarea);
        }else{
            return $this->responseError('Tarea no encontrada');
        }
 
    }
}
