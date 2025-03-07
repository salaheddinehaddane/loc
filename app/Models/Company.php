<?php

namespace App\Models;

use App\Enums\CompanyStatusEnum;
use App\Enums\SubscriptionStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'phone',
        'email',
        'website',
        'status',
    ];

    protected $casts = [
        'status' => CompanyStatusEnum::class,
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activeSubscription()
    {
        return $this->hasOne(SubscriptionPlan::class)
            ->where('status', SubscriptionStatusEnum::ACTIVE)
            ->where('end_date', '>=', now());
    }

    public function subscriptions()
    {
        return $this->belongsToMany(SubscriptionPlan::class);
    }

    public function companyBranches()
    {
        return $this->hasMany(CompanyBranch::class);
    }
}
