<?php

namespace Database\Factories;

use App\Enums\CarClassEnum;
use App\Enums\CarStatusEnum;
use App\Enums\FuelTypeEnum;
use App\Enums\TransmissionEnum;
use App\Models\CompanyBranch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-2 months', '+1 month');
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 month');
        return [
            'company_branch_id' => $this->faker->randomElement(CompanyBranch::all())->id,
            'brand_id' => $this->faker->randomElement(\App\Models\Brand::all())->id,
            'category_id' => $this->faker->randomElement(\App\Models\Category::all())->id,
            'registration_number' => $this->faker->unique()->regexify('[1-9]{4}[A-Z]{1}[1-9]{1}'),
            'model' => $this->faker->numberBetween(2015, 2024),
            'fuel_type' => $this->faker->randomElement(FuelTypeEnum::cases()),
            'transmission' => $this->faker->randomElement(TransmissionEnum::cases()),
            'image' => $this->faker->imageUrl(640, 480),
            'price_per_day' => $this->faker->numberBetween(300, 5000),
            'available_from' => $startDate,
            'available_to' => $endDate,
            'status' => $this->faker->randomElement(CarStatusEnum::cases()),
            'class' => $this->faker->randomElement(CarClassEnum::cases()),
            'no_of_seats' => $this->faker->randomElement([4, 5, 7, 8 , 9]),
            'no_of_doors' => $this->faker->randomElement([2, 4, 5]),
        ];
    }
}
