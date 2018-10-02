<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooterComposerServiceProvider extends ServiceProvider
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
        $this->composeFooterArea();
    }
    public function composeFooterArea()
    {
        view()->composer(['FrontEnd.include.*'],'App\Http\ViewComposers\FooterComposer');
    }
}
