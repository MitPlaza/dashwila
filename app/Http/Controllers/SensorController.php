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
    public function update(Request $request, sensor $sensor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'bateria' => 'required|numeric|min:0|max:100',
            'desgaste' => 'required|numeric|min:0|max:100',
            'temperatura' => 'required|integer',
            'estado' => 'required|in:activo,desactivado'
        ]);

        $sensor->update($request->all());

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
