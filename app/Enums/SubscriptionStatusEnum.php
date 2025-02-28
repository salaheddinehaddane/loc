<?php

namespace App\Enums;

enum SubscriptionStatusEnum : string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case CANCELLED = 'cancelled';
}
