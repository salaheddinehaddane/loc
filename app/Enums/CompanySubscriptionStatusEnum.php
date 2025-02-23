<?php

namespace App\Enums;

enum CompanySubscriptionStatusEnum : string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case CANCELLED = 'cancelled';
}
