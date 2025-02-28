<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySubscriptionPlan extends Model
{
    protected $fillable = [
        'subscription_plan_id',
        'company_id',
        'start_date',
        'end_date',
        'status',
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
