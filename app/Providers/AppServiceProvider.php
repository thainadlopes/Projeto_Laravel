<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
\Illuminate\Support\Facades\Schema::defaultStringLength(191); 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
