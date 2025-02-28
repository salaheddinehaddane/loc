<?php

namespace App\Enums;

enum CarStatusEnum: string
{
    case AVAILABLE = 'available';
    case RENTED = 'rented';
    case MAINTENANCE = 'maintenance';
    case OUT_OF_SERVICE = 'out-of-service';
}
