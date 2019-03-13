<?php

namespace App\Models;

use App\Models\Traits\HasMedia\HasMedia;
use App\Models\Traits\HasMedia\HasMediaTrait;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements HasMedia
{
    use HasMediaTrait;

    public $timestamps = false;

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'array',
    ];
}
