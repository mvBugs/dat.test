<?php

namespace App\Models;

use App\Fields\Traits\Fieldable;
use Illuminate\Database\Eloquent\Model;

class Block extends \Fomvasss\LaravelVisualEditable\Models\Block
{
    use \App\Models\Traits\Localable;

    protected $guarded = ['id'];

    public function strTokenRender($entity, $token, $alias)
    {
        // TODO use block Builder!!!
        $locale = \UrlAliasLocalization::getCurrentLocale();
        return \Cache::remember('strTokenRender' . $alias . '_' . $locale, 1, function () use ($alias, $locale) {
            if ($block = self::smartFirstOrNew($alias, $locale)) {
                if ($block->blade && view()->exists($block->blade)) {
                    return view($block->blade, compact("block"))->render();
                }
            }

            if (view()->exists("front.blocks.".$alias)) {
                return view("front.blocks.".$alias, compact('block'))->render();
            };

            return "";
        });
    }

    public function getEditableUrlVisualStore(): string
    {
        return '';
    }

    public function getEditableUrlVisualUpdate(): string
    {
        return '';
    }

    public function getEditableUrlDashboardEdit(): string
    {
        return '';
    }
}
