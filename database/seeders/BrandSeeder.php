<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Abarth',
                'key' => 'abarth',
            ],
            [
                'name' => 'Alfa Romeo',
                'key' => 'alfa-romeo',
            ],
            [
                'name' => 'Audi',
                'key' => 'audi',
            ],
            [
                'name' => 'BMW',
                'key' => 'bmw',
            ],
            [
                'name' => 'Changan',
                'key' => 'changan',
            ],
            [
                'name' => 'Chevrolet',
                'key' => 'chevrolet',
            ],
            [
                'name' => 'Citroën',
                'key' => 'citroen',
            ],
            [
                'name' => 'Cupra',
                'key' => 'cupra',
            ],
            [
                'name' => 'Dacia',
                'key' => 'dacia',
            ],
            [
                'name' => 'Ferrari',
                'key' => 'ferrari',
            ],
            [
                'name' => 'Fiat',
                'key' => 'fiat',
            ],
            [
                'name' => 'Ford',
                'key' => 'ford',
            ],
            [
                'name' => 'Hyundai',
                'key' => 'hyundai',
            ],
            [
                'name' => 'Jeep',
                'key' => 'jeep',
            ],
            [
                'name' => 'Kia',
                'key' => 'kia',
            ],
            [
                'name' => 'Lamborghini',
                'key' => 'lamborghini',
            ],
            [
                'name' => 'Lexus',
                'key' => 'lexus',
            ],
            [
                'name' => 'MG',
                'key' => 'mg',
            ],
            [
                'name' => 'Mahindra',
                'key' => 'mahindra',
            ],
            [
                'name' => 'Maserati',
                'key' => 'maserati',
            ],
            [
                'name' => 'Masserati',
                'key' => 'masserati',
            ],
            [
                'name' => 'Mercedes',
                'key' => 'mercedes',
            ],
            [
                'name' => 'Mitsubishi',
                'key' => 'mitsubishi',
            ],
            [
                'name' => 'Nissan',
                'key' => 'nissan',
            ],
            [
                'name' => 'Opel',
                'key' => 'opel',
            ],
            [
                'name' => 'Peugeot',
                'key' => 'peugeot',
            ],
            [
                'name' => 'Porsche',
                'key' => 'porsche',
            ],
            [
                'name' => 'Range Rover',
                'key' => 'range-rover',
            ],
            [
                'name' => 'Renault',
                'key' => 'renault',
            ],
            [
                'name' => 'Seat',
                'key' => 'seat',
            ],
            [
                'name' => 'Skoda',
                'key' => 'skoda',
            ],
            [
                'name' => 'Suzuki',
                'key' => 'suzuki',
            ],
            [
                'name' => 'Toyota',
                'key' => 'toyota',
            ],
            [
                'name' => 'Volkswagen',
                'key' => 'volkswagen',
            ],
        ];

        Brand::insert($brands);

    }
}
