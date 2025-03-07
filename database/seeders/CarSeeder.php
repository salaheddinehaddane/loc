<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1 ; $i <= 50 ; $i++) {
            Car::factory()->count(1000)->create();
            $this->command->info('Iteration ' . $i . ' done');
        }
    }
}
