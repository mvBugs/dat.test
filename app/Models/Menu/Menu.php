<?php

namespace App\Models\Menu;

use App\Models\Traits\HasSafe;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasSafe;

    public $timestamps = false;

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saved(function (Model $model) {
            \Cache::forget('front_menus');
        });
        static::deleted(function (Model $model) {
            \Cache::forget('front_menus');
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
