<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sensor;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::create([
            'nombre' => 'Carbón #1',
            'bateria' => 67.0,
            'temperatura' => 68,
            'desgaste' => 21.3,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #2',
            'bateria' => 65.0,
            'temperatura' => 87,
            'desgaste' => 27.4,
            'estado' => 'activo',
            'condicion' => 'aceptable',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #3',
            'bateria' => 80.0,
            'temperatura' => 90,
            'desgaste' => 10.0,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #4',
            'bateria' => 40.0,
            'temperatura' => 120,
            'desgaste' => 55.0,
            'estado' => 'activo',
            'condicion' => 'crítico',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #5',
            'bateria' => 72.0,
            'temperatura' => 70,
            'desgaste' => 18.0,
            'estado' => 'desactivado',
            'condicion' => 'aceptable',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #6',
            'bateria' => 67.0,
            'temperatura' => 68,
            'desgaste' => 21.3,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #7',
            'bateria' => 65.0,
            'temperatura' => 87,
            'desgaste' => 27.4,
            'estado' => 'activo',
            'condicion' => 'aceptable',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #8',
            'bateria' => 80.0,
            'temperatura' => 90,
            'desgaste' => 10.0,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #9',
            'bateria' => 40.0,
            'temperatura' => 120,
            'desgaste' => 55.0,
            'estado' => 'activo',
            'condicion' => 'crítico',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #10',
            'bateria' => 72.0,
            'temperatura' => 70,
            'desgaste' => 18.0,
            'estado' => 'desactivado',
            'condicion' => 'aceptable',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #11',
            'bateria' => 67.0,
            'temperatura' => 68,
            'desgaste' => 21.3,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #12',
            'bateria' => 65.0,
            'temperatura' => 87,
            'desgaste' => 27.4,
            'estado' => 'activo',
            'condicion' => 'aceptable',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #13',
            'bateria' => 80.0,
            'temperatura' => 90,
            'desgaste' => 10.0,
            'estado' => 'activo',
            'condicion' => 'óptimo',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #14',
            'bateria' => 40.0,
            'temperatura' => 120,
            'desgaste' => 55.0,
            'estado' => 'activo',
            'condicion' => 'crítico',
        ]);

        Sensor::create([
            'nombre' => 'Carbón #15',
            'bateria' => 72.0,
            'temperatura' => 70,
            'desgaste' => 18.0,
            'estado' => 'desactivado',
            'condicion' => 'aceptable',
        ]);
    }
}
