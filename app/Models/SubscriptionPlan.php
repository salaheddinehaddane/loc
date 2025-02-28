<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration',
        'max_cars',
        'max_offers',
        'is_active',
        'features',
        'description',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
