<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            'Tecnología',
            'Salud',
            'Deportes',
            'Negocios',
            'Educación',
        ];

        foreach ($areas as $name) {
            Area::create(['name' => $name]);
        }
    }
}
