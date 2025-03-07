<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityCompany extends Model
{
    protected $fillable = [
        'address',
        'city_id',
        'company_id',
        'is_active',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
