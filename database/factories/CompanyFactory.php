<?php

namespace Database\Factories;

use App\Enums\CompanyStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail(),
            'slug' => $this->faker->slug,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'status' => $this->faker->randomElement(CompanyStatusEnum::cases()),
            'logo' => $this->faker->imageUrl(640, 480),
        ];
    }
}
