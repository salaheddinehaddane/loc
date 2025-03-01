<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Family',
                'key' => 'family',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Economy',
                'key' => 'economy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Compact',
                'key' => 'compact',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sedan',
                'key' => 'sedan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SUV',
                'key' => 'suv',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury',
                'key' => 'luxury',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Convertible',
                'key' => 'convertible',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sport',
                'key' => 'sport',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pickup Truck',
                'key' => 'pickup_truck',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Van',
                'key' => 'van',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minivan',
                'key' => 'minivan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '4x4 / Off-Road',
                'key' => '4x4_off_road',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electric',
                'key' => 'electric',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hybrid',
                'key' => 'hybrid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Category::insert($categories);
    }
}
