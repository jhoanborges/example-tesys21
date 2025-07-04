<?php

namespace App\Traits;
use App\Http\Requests\StoreTareasRequest;
use App\Models\Tarea;

trait TareasTrait
{
    public function completarOperacion(Tarea $tarea, $completada)
    {
        $tarea->completada = $completada;
        $tarea->save();
        return $tarea;
    }
}
