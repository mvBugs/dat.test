<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntityType extends Model
{
    public $timestamps = false;

    protected $casts = [
        'data' => 'array',
    ];
}
