<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $brands = ['Dell', 'HP', 'Lenovo', 'Asus', 'Acer'];

        foreach (range(1, 5) as $index) {
            Computer::create([
                'number' => $index,
                'brand' => $brands[$index - 1]
            ]);
        }
        
    }
}
