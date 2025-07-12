<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GraficoBarras extends Component
{
    public $datos;
    public $titulo;
    public $tipo;

    public function __construct($datos, $titulo, $tipo)
    {
        $this->datos = $datos;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
    }

    // Método helper para obtener la unidad según el tipo
    public function getUnidad()
    {
        return $this->tipo === 'temperatura' ? '°C' : '%';
    }

    // Método helper para obtener el máximo del eje Y
    public function getMaximoEje()
    {
        return $this->tipo === 'temperatura' ? 120 : 100;
    }

    // Método helper para obtener la propiedad de datos
    public function getPropiedadDatos()
    {
        return $this->tipo === 'temperatura' ? 'temperatura' : 'desgaste';
    }

    public function render()
    {
        return view('components.grafico-barras', [
            'unidad' => $this->getUnidad(),
            'maximoEje' => $this->getMaximoEje(),
            'propiedadDatos' => $this->getPropiedadDatos()
        ]);
    }
}