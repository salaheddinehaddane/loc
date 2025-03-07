<?php
namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Cache;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        [$company_branch_id, $car_id] = $this->getUniqueCouple();
        return [
            'company_branch_id' => $company_branch_id,
            'car_id'            => $car_id,
            'is_active'         => $this->faker->randomElement([0, 1]),
        ];
    }

    public function getUniqueCouple()
    {
        $car = $this->faker->randomElement(Cache::remember('cars', 60 * 60, function () {
            return Car::all();
        }));
        $car_id            = $car->id;
        $company_branch_id = $car->company_branch_id;
        if (Cache::has('inserted_posts') && collect(Cache::get('inserted_posts'))->contains([$company_branch_id, $car_id])) {
            return $this->getUniqueCouple();
        }
        
        Cache::put('inserted_posts', array_merge(Cache::get('inserted_posts') ?? [[]], [[$company_branch_id, $car_id]]), 60 * 60);
        
        return [$company_branch_id, $car_id];

    }
}
