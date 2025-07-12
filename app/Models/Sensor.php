<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [

    'nombre',
    'bateria',
    'temperatura',
    'desgaste',
    'estado',
    'condicion',
    'area',
    ];

    public function historial()
{
    return $this->hasMany(HistorialSensor::class);
}

}
