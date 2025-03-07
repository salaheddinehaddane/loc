<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_branch_id',
        'car_id',
        'is_active',
    ];

    public function companyBranch()
    {
        return $this->belongsTo(CompanyBranch::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
