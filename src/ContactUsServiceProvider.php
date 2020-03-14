<?php

namespace Jebpkgs\ContactUs;

use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contactus');
        $this->publishes([__DIR__.'/views', base_path('resources/views/jebpkgs/contactus')], 'contactus');
    }
}
