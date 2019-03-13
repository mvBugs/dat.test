<?php

namespace App\Models\Taxonomy;

use App\Models\Shop\Sale;
use App\Models\Traits\HasMedia\HasMedia;
use App\Models\Traits\HasMedia\HasMediaTrait;
use App\Models\Traits\HasSafe;
use App\Traits\UrlAliasGenerator;
use Fomvasss\LaravelEUS\Facades\EUS;
use Fomvasss\UrlAliases\Traits\UrlAliasable;
use Illuminate\Database\Eloquent\Builder;

class Term extends \Fomvasss\Taxonomy\Models\Term implements HasMedia
{
    use UrlAliasable, UrlAliasGenerator, HasMediaTrait, HasSafe;

    protected $mediaFieldsSingle = ['texture', 'image', 'file'];

    protected $mediaFieldsMultiple = ['images', 'files'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('weight', function (Builder $builder) {
            $builder->orderBy('weight', 'asc')->orderBy('id', 'asc');
        });
    }

    /**
     * Relation for attributes.
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function attrs()
    {
        return $this->morphedByMany(\App\Models\Shop\Attribute::class, 'termable');
    }

    /**
     * Предки.
     * @return mixed
     */
    public function attrsAncestorsCategories()
    {
        return $this->ancestors->push($this)/*->load('attrs')*/->map(function ($term) {
            return $term->attrs;
        })->flatten()->unique('id');
    }

    /**
     * Потомки.
     * @return mixed
     */
    public function attrsDescendantsCategories()
    {
        return $this->descendants->push($this)->load('attrs')->map(function ($term) {
            return $term->attrs;
        })->flatten()->unique('id');
    }

    public function products()
    {
        return $this->morphedByMany(\App\Models\Shop\Product::class, 'termable')->orderBy('id', 'desc');
    }

    /**
     * @return mixed|null|string
     */
    public function getSlugAttribute()
    {
        return $this->system_name ?? '';
    }

    /**
     * @return string
     */
    public function generateUrlAlias()
    {
        return $this->getUniqueAliasedPathForNestedEntity($this);
    }

    /**
     * @return string
     */
    public function generateUrlSource()
    {
        if ($this->vocabulary == 'product_categories') {
            return trim(route('category.show', $this, false), '/');
        }

        return '';
    }

    public function sales()
    {
        return $this->morphToMany(Sale::class, 'model', 'saleables');
    }

    public function generateSystemName()
    {
        if (in_array($this->vocabulary, ['order_statuses', 'payment_statuses', 'product_categories'])) {
            $slugSeparator = $this->vocabulary == 'product_categories' ? '-' : '_';
            return EUS::setEntity($this)
                ->setRawStr($this->name)
                ->setFieldName('system_name')
                ->setSlugSeparator($slugSeparator)
                ->get();
        }

        return '';
    }

    public function scopeIsPublish($query)
    {
        return $query->where('publish', 1);
    }

    public function statusAdminStr()
    {
        $styleClass = $this->options['admin_style'] ?? "label label-success";

        return "<sbodypan class='$styleClass'> $this->name </sbodypan>";
    }
}
