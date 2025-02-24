<?php

namespace App\Models;

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
        'rate',
        'notes',
        'status',
        'subscription_plan_id'
     ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function subscriptionPlan()
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }

}
