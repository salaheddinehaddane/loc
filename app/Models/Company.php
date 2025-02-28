<?php

namespace App\Models;

use App\Enums\SubscriptionStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     protected $fillable=[
        'name',
        'slug',
        'logo',
        'phone',
        'email',
        'address',
        'website',
        'description',
        'status',
     ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activeSubscription()
    {
        return $this->hasOne(SubscriptionPlan::class)
            ->where('status', SubscriptionStatusEnum::ACTIVE->value)
            ->where('end_date', '>=', now());
    }

    public function subscriptions()
    {
        return $this->hasMany(SubscriptionPlan::class);
    }

}
