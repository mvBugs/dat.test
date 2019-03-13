<?php

namespace App\Models;

use App\Fields\Traits\Fieldable;
use App\Models\Traits\HasMedia\HasMedia;
use App\Models\Traits\HasMedia\HasMediaTrait;
use App\Traits\UrlAliasGenerator;
use Fomvasss\UrlAliases\Traits\UrlAliasable;
use Illuminate\Database\Eloquent\Model;

class Node extends Model implements HasMedia
{
    use UrlAliasable, UrlAliasGenerator, HasMediaTrait;

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'array',
    ];

    public function previous()
    {
        $sortField = $this->getKeyName();
        return static::whereType($this->type)->where($sortField, '<', $this->getKey())->orderByDesc($sortField)
            ->first();
    }

    public function next()
    {
        $sortField = $this->getKeyName();
        return static::whereType($this->type)->where($sortField, '>', $this->getKey())->orderBy($sortField)
            ->first();
    }

    public function eType()
    {
        return $this->belongsTo(EntityType::class, 'type', 'system_name');
    }

    /**
     * @return string
     */
    public function generateUrlAlias(string $alias = null)
    {
        return $this->getUniqueAliasedPath($this, $alias ?? request('url_alias', $this->name));
    }

    /**
     * @return string
     */
    public function generateUrlSource()
    {
        return trim(route('node.show', $this, false), '/');
    }

    public function getBladeAttribute()
    {
        return $this->data['blade'] ?? '';
    }
}
