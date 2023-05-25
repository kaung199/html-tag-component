<?php

namespace Kaung199\Htmltagcomponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class HtmlTagServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::componentNamespace('Kaung199\\Htmltagcomponent\\View\\Components\\Forms', 'forms');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'htmltagcomponent');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/htmltagcomponent')
        ]);
    }
}
