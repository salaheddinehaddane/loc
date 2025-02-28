<?php

namespace App\Enums;

enum TransmissionEnum: string
{
    case AUTOMATIC = 'automatic';
    case MANUAL = 'manual';
    case SEMI_AUTOMATIC = 'semi-automatic';
}
