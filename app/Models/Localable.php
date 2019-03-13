<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localable extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function entity()
    {
        $locale = app()->getLocale();

        return $this->morphTo('localable', 'model', $locale, 'id');
    }
}
