<?php
/**
 * Created by PhpStorm.
 * User: its
 * Date: 04.03.19
 * Time: 12:14
 */

namespace App\Models\Traits;

trait Localable
{
    public function localable()
    {
        // Use this after load self model!!!
        $locale = $this->locale ?? app()->getLocale();

        return $this->morphOne(\App\Models\Localable::class, 'localable', 'model', $locale, 'id');
    }

    public function scopeByLocale($query, string $locale = '')
    {
        $locale = $locale ?: app()->getLocale();

        return $query->where('locale', $locale);
    }
}