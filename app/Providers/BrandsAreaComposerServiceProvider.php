<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BrandsAreaComposerServiceProvider extends ServiceProvider
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
        $this->composeBrandsArea();
    }
    public function composeBrandsArea()
    {
        view()->composer(['FrontEnd.include.*'],'App\Http\ViewComposers\FooterComposer');
    }
}
