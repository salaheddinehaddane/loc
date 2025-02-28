<?php

namespace App\Models;

use App\Enums\SubscriptionStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'company_id',
        'subscription_plan_id',
        'status',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'status' => SubscriptionStatusEnum::class,
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function subscriptionPlan()
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }
}
