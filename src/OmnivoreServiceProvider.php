<?php

namespace Sapioweb\Omnivore;

use Illuminate\Support\ServiceProvider;

class OmnivoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sapioweb\Omnivore\OmnivoreGeneral');
        $this->app->make('Sapioweb\Omnivore\OmnivoreTickets');
        $this->app->make('Sapioweb\Omnivore\OmnivoreTables');
    }
}
