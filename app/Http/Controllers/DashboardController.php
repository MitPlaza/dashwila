<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;


class DashboardController extends Controller
{
    public function index(){
       
        $sensoresActivos = Sensor::where('estado', 'activo')->count();
        $sensoresCriticos = Sensor::where('condicion', 'critico')->count();
        $temperaturaPromedio = round(Sensor::where('estado', 'activo')->avg('temperatura'), 1);

        $sensores = Sensor::all();

        return view('dashboard', compact('sensores', 'sensoresActivos', 'sensoresCriticos', 'temperaturaPromedio'));

    }
}
