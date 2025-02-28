<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'company_id',
        'brand_id',
        'category_id',
        'registration_number',
        'model',
        'fuel_type',
        'transmission',
        'image',
        'price_per_day',
        'available_from',
        'available_to',
        'status',
        'class',
        'no_of_seats',
        'no_of_doors',
    ];
}
