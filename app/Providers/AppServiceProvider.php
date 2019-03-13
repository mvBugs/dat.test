<?php

namespace App\Providers;

use App\Helpers\Blocks\BlockBuilder;
use App\Helpers\Menu\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Menu::class, function ($app) {
            return new Menu($app);
        });

        //$this->app->singleton(BlockBuilder::class, function ($app) {
        //    return new BlockBuilder($app);
        //});
    }
}
