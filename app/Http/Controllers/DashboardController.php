<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\HistorialSensor;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $sensoresActivos = Sensor::where('estado', 'activo')->count();
        $sensoresCriticos = Sensor::where('condicion', 'critico')->count();
        $temperaturaPromedio = round(Sensor::where('estado', 'activo')->avg('temperatura'), 1);

        $sensores = Sensor::all();

        // Obtener datos para los gráficos
        $datosGrafico = $this->obtenerDatosGraficoDesgaste();
        $datosGraficoTemperatura = $this->obtenerDatosGraficoTemperatura();

        return view('dashboard', compact(
            'sensores', 
            'sensoresActivos', 
            'sensoresCriticos', 
            'temperaturaPromedio',
            'datosGrafico',
            'datosGraficoTemperatura'
        ));
    }

    private function obtenerDatosGraficoDesgaste()
    {
        // Obtener el promedio de desgaste histórico por sensor
        $promediosDesgaste = HistorialSensor::select(
            'sensor_id',
            DB::raw('AVG(desgaste) as promedio_desgaste')
        )
        ->groupBy('sensor_id')
        ->get()
        ->keyBy('sensor_id');

        // Obtener sensores específicamente ordenados por área
        $sensoresInterior = Sensor::where('area', 'Anillo Interior')->orderBy('id')->get();
        $sensoresMedio = Sensor::where('area', 'Anillo Medio')->orderBy('id')->get();
        $sensoresExterior = Sensor::where('area', 'Anillo Exterior')->orderBy('id')->get();

        // Función helper para procesar sensores de desgaste
        $procesarSensores = function($sensores) use ($promediosDesgaste) {
            $resultado = [];
            foreach ($sensores as $sensor) {
                $promedioDesgaste = $promediosDesgaste->get($sensor->id);
                $desgaste = $promedioDesgaste ? round($promedioDesgaste->promedio_desgaste, 1) : 0;
                
                $resultado[] = [
                    'nombre' => $sensor->nombre,
                    'desgaste' => $desgaste,
                    'color' => $this->obtenerColorDesgaste($desgaste),
                    'sensor_id' => $sensor->id
                ];
            }
            return $resultado;
        };

        // Organizar datos por área con orden garantizado
        $datos = [
            'Anillo Interior' => $procesarSensores($sensoresInterior),
            'Anillo Medio' => $procesarSensores($sensoresMedio),
            'Anillo Exterior' => $procesarSensores($sensoresExterior)
        ];

        return $datos;
    }

    private function obtenerDatosGraficoTemperatura()
    {
        // Obtener el promedio de temperatura histórica por sensor
        $promediosTemperatura = HistorialSensor::select(
            'sensor_id',
            DB::raw('AVG(temperatura) as promedio_temperatura')
        )
        ->groupBy('sensor_id')
        ->get()
        ->keyBy('sensor_id');

        // Obtener sensores específicamente ordenados por área
        $sensoresInterior = Sensor::where('area', 'Anillo Interior')->orderBy('id')->get();
        $sensoresMedio = Sensor::where('area', 'Anillo Medio')->orderBy('id')->get();
        $sensoresExterior = Sensor::where('area', 'Anillo Exterior')->orderBy('id')->get();

        // Función helper para procesar sensores de temperatura
        $procesarSensores = function($sensores) use ($promediosTemperatura) {
            $resultado = [];
            foreach ($sensores as $sensor) {
                $promedioTemperatura = $promediosTemperatura->get($sensor->id);
                $temperatura = $promedioTemperatura ? round($promedioTemperatura->promedio_temperatura, 1) : 0;
                
                $resultado[] = [
                    'nombre' => $sensor->nombre,
                    'temperatura' => $temperatura,
                    'color' => $this->obtenerColorTemperatura($temperatura),
                    'sensor_id' => $sensor->id
                ];
            }
            return $resultado;
        };

        // Organizar datos por área con orden garantizado
        $datos = [
            'Anillo Interior' => $procesarSensores($sensoresInterior),
            'Anillo Medio' => $procesarSensores($sensoresMedio),
            'Anillo Exterior' => $procesarSensores($sensoresExterior)
        ];

        return $datos;
    }

    private function obtenerColorDesgaste($desgaste)
    {
        if ($desgaste < 20) {
            return '#00a8e8'; // Celeste - Óptimo
        } elseif ($desgaste < 40) {
            return '#f59e0b'; // Naranja - Aceptable
        } else {
            return '#dc2626'; // Rojo - Crítico
        }
    }

    private function obtenerColorTemperatura($temperatura)
    {
        if ($temperatura < 60) {
            return '#00a8e8'; // Celeste - Óptimo
        } elseif ($temperatura < 80) {
            return '#f59e0b'; // Naranja - Aceptable
        } else {
            return '#dc2626'; // Rojo - Crítico
        }
    }
}