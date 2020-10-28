<?php

namespace SantosSabanari\LaravelDatatables;

use Illuminate\Support\ServiceProvider;

class LaravelDatatablesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-datatables');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-datatables'),
            ], 'views');
        }
    }
}
