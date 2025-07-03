<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sensor;

class UpdateSensorAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::whereBetween('id', [1,5])->update(['area' => 'Anillo Interior']);
        Sensor::whereBetween('id', [6,10])->update(['area' => 'Anillo Medio']);
        Sensor::whereBetween('id', [11,15])->update(['area' => 'Anillo Exterior']);
    }
}
