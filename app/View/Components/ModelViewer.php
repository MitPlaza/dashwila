<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModelViewer extends Component
{
    public $sensores;
    public $datosHistoricos;

    public function __construct($sensores, $datosHistoricos = [])
    {
        $this->sensores = $sensores;
        $this->datosHistoricos = $datosHistoricos;
    }

    public function render(): View|Closure|string
    {
        return view('components.model-viewer');
    }
}