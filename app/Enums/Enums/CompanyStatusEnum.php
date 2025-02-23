<?php

namespace App\Enums\Enums;

enum CompanyStatusEnum : string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BLOCKED = 'blocked'; //bla
}
