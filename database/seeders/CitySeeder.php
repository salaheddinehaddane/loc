<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'name_en' => 'Marrakech',
                'name_ar' => 'مراكش',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Rabat',
                'name_ar' => 'الرباط',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Casablanca',
                'name_ar' => 'الدار البيضاء',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_en' => 'Tanger',
                'name_ar' => 'طنجة',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        City::insert($cities);
    }
}
