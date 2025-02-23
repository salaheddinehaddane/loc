<?php

namespace App\Enums;

enum RoleEnum: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case AGENCY_ADMIN = 'agency_admin';
    case AGENCY_OPERATOR = 'agency_operator';
    case CLIENT = 'client';
}
