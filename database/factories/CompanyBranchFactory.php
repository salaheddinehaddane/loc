<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyBranch>
 */
class CompanyBranchFactory extends Factory
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
            'slug' => $this->faker->slug,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'is_active' => $this->faker->randomElement([0, 1]),
            'company_id' => $this->faker->randomElement(Company::all())->id,
            'city_id' => $this->faker->randomElement(City::all())->id,
        ];
    }
}
