<?php

namespace Usama\Gallerypack;

use Illuminate\Support\ServiceProvider;


class GalleryPackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require(__DIR__.'/Http/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // to load views of the package
        $this->loadViewsFrom(__DIR__.'/Views','gallerypack');
        // to publish all files required by the package
        $this->publishes([
            __DIR__.'/migrations' => base_path('databases/migrations'),
            __DIR__.'/seeds' => base_path('databases/seeds')
        ]);
    }
}
