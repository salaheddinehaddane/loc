<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityCompany extends Model
{
    protected $fillable = [
        'address',
        'city_id',
        'company_id',
        'status',
    ];
}
