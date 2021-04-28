<?php

namespace App\Providers;

use App\Models\HeaderData;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $headerData = HeaderData::with('links')->first();
            $view->with('headerData', $headerData);
        });
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }
}
