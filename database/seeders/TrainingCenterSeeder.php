<?php

namespace Database\Seeders;

use App\Models\TrainingCenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Tecnología', 'Salud', 'Deportes', 'Negocios', 'Educación'];
        $locations = ['Buenos Aires', 'Córdoba', 'Rosario', 'Mendoza', 'La Plata'];

        foreach ($names as $index => $name) {
            TrainingCenter::create([
                'name' => $name,
                'location' => $locations[$index]
            ]);
        }
    }
}
