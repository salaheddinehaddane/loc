<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_branch_id',
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

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function companyBranch()
    {
        return $this->belongsTo(CompanyBranch::class);
    }
}
