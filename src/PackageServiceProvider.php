<?php

namespace Tsi\Helloword;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Define routes, views, migrations, etc.
    }

    public function register()
    {
         // Load routes, views, or other assets.
         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         $this->loadViewsFrom(__DIR__.'/resources/views', 'yourpackage');
         $this->publishes([
             __DIR__.'/config/yourpackage.php' => config_path('yourpackage.php'),
         ]);
    }
}