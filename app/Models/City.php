<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en;
    }
}
