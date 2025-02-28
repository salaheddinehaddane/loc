<?php

namespace App\Enums;

enum FuelTypeEnum: string
{
    case DIESEL = 'diesel';
    case GASOLINE = 'gasoline';
    case ELECTRIC = 'electric';
    case HYBRID = 'hybrid';
}
