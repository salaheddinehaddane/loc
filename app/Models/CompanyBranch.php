<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'email',
        'address',
        'is_active',
        'company_id',
        'city_id',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
