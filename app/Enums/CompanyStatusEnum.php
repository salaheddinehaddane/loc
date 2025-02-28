<?php

namespace App\Enums;

enum CompanyStatusEnum : string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BLOCKED = 'blocked'; //blacklist
}
