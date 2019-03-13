<?php
/**
 * Created by PhpStorm.
 * User: fomvasss
 * Date: 13.12.18
 * Time: 23:38
 */

namespace App\Traits;

use Fomvasss\LaravelEUS\Facades\EUS;
use Fomvasss\UrlAliases\Models\UrlAlias;

trait UrlAliasGenerator
{
    /**
     * Get unique url alias (full path) for category with subcategories.
     * Example: "programming/web-programming/use-php-for-make-sites"
     *
     * @param \Illuminate\Database\Eloquent\Model $entity
     * @return string
     */
    protected function getUniqueAliasedPathForNestedEntity(\Illuminate\Database\Eloquent\Model $entity, $aliasSourceField = 'name'): string
    {
        $rawPath = $this->getRawPathForNestedEntity($entity, $aliasSourceField);

        return $this->getUniqueAliasedPath($entity, $rawPath);
    }

    /**
     * Get "raw" url alias(full path) for category with subcategories.
     * Example: "Programming/Web programming/Use PHP for make sites"
     *
     * @param \Illuminate\Database\Eloquent\Model $term
     * @return string
     */
    protected function getRawPathForNestedEntity(\Illuminate\Database\Eloquent\Model $term, $aliasSourceField = 'name'): string
    {
        $names = array_map(function ($a) use ($aliasSourceField) {
            return $a[$aliasSourceField];
        }, $term->ancestors->toArray());

        $names[] = $term->{$aliasSourceField};

        return implode('/', $names);
    }

    /**
     * Get unique url alias path for entity.
     * Example: "pages/page-example-1"
     *
     * @param \Illuminate\Database\Eloquent\Model $entity
     * @param string $rawPath
     * @return string
     */
    protected function getUniqueAliasedPath(\Illuminate\Database\Eloquent\Model $entity, string $rawPath = ''): string
    {
        return EUS::setEntity($entity->urlAlias ?? new UrlAlias())
            ->setRawStr($rawPath)
            ->setFieldName('alias')
            ->setSlugSeparator('-')
            ->setAllowedSeparator('/')
            ->get();
    }

    /**
     * Update or create url alias path for entity.
     *
     * @param \Illuminate\Database\Eloquent\Model $entity
     * @param string $uniquePath
     * @param string $systemPath
     * @return mixed
     */
    protected function updateOrCreateUrlAlias(\Illuminate\Database\Eloquent\Model$entity, string $alias, string $source, string $locale = null)
    {
        return $entity->urlAlias()->updateOrCreate([], [
                'alias' => $alias,
                'source' => $source == '/' ? '/' : trim($source, '/'),
                'locale' => $locale,
            ]
        );
    }
}