<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensores = Sensor::all();
        return view('sensores.index', compact('sensores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensor $sensor)
    {
        // Mostrar formulario de edición
        return view('sensores.edit', compact('sensor'));
    }

    /**
     * Update the specified resource in storage.
     */
   

    public function update(Request $request, Sensor $sensor)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'bateria' => 'required|numeric|min:0|max:100',
        'desgaste' => 'required|numeric|min:0|max:100',
        'temperatura' => 'required|integer',
        'estado' => 'required|in:activo,desactivado'
    ]);

    // 1. Guarda el histórico con los datos antes del cambio
    $sensor->historial()->create([
        'bateria' => $sensor->bateria,
        'desgaste' => $sensor->desgaste,
        'temperatura' => $sensor->temperatura,
    ]);

    // 2. Calcular automáticamente la condición - DESGASTE ES PRIORITARIO
    $nuevaTemperatura = $request->temperatura;
    $nuevoDesgaste = $request->desgaste;
    
    // Lógica basada en DESGASTE como prioridad
    if ($nuevoDesgaste > 40) {
        $condicion = 'critico';  // Si desgaste > 40%, siempre crítico
    }
    elseif ($nuevoDesgaste >= 20) {
        $condicion = 'aceptable'; // Si desgaste entre 20-40%, aceptable
    }
    else {
        $condicion = 'optimo';    // Si desgaste < 20%, óptimo
    }

    // 3. Actualizar el sensor con los nuevos datos Y la condición calculada
    $sensor->update([
        'nombre' => $request->nombre,
        'bateria' => $request->bateria,
        'desgaste' => $nuevoDesgaste,
        'temperatura' => $nuevaTemperatura,
        'estado' => $request->estado,
        'condicion' => $condicion  // ← Calculado automáticamente basado en desgaste
    ]);

    return redirect()->route('sensores.index')->with('success', 'Sensor actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
