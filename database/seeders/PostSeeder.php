<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class PostSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statTime = microtime(true);
        Cache::tags('seeder')->flush();
        $this->command->info('Post seeder started');
        Cache::tags('seeder')->put('cars', Car::all()->select('id', 'company_branch_id'), 60 * 60);
        $iteration = 10; // 500 * 10 = 50000 posts
        $carCount = Car::count();

        for ($i = 1; $i <= $iteration; $i++){
            $this->command->info('Iteration '.$i);
            $couples = [];
            for ($j = 1; $j <= 500; $j++){
                $car = $this->pickUniqueCar($carCount);
                $couples[] = [
                    'company_branch_id' => $car['company_branch_id'],
                    'car_id' => $car['id'],
                    'is_active' => rand(0, 1),
                ];
            }
            Post::insert($couples);
            $this->command->info('Iteration '.$i.' done');
        }

        $endTime = microtime(true);
        $this->command->info('Post seeder finished in '.($endTime - $statTime));
    }

    public function pickUniqueCar($carCount)
    {
        // TODO:: pluck car ids, instead of genearating them randomly, assuming that ids start from 1
        // TODO::It's better to take cars sequentially, not randomly
        // in case of one car left, it will take time to pick it up
        $pickedCarId = rand(1, $carCount);

        if (Cache::tags('seeder')->has('picked_car') && Cache::tags('seeder')->get('picked_car')->contains($pickedCarId)) {
            $this->command->warn('Picked car already exists '.$pickedCarId);

            return $this->pickUniqueCar($carCount);
        }
        Cache::tags('seeder')
            ->put('picked_car',
                Cache::tags('seeder')->has('picked_car') ?
                Cache::tags('seeder')->get('picked_car')->push($pickedCarId) :
                collect([$pickedCarId]), 60 * 60);
        $this->command->info('Picked car ID '.$pickedCarId);
        $pickedCar = Cache::tags('seeder')->get('cars')->firstWhere('id', $pickedCarId);
        if (! $pickedCar){
            $this->command->warn('Picked car not found '.$pickedCarId);

            return $this->pickUniqueCar($carCount);
        }

        return $pickedCar;
    }
}
