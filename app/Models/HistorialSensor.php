<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialSensor extends Model
{
    use HasFactory;

  
    protected $fillable = [
        'sensor_id',
        'bateria',
        'desgaste',
        'temperatura',

    ];

    public function sensor() {

       return $this->belongsTo(Sensor::class);
    }

}
