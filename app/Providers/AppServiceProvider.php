<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//schema added
use Illuminate\Support\Facades\Schema;
//added
//use Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(200);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //added
        //Schema::defaultStringLength(200);
    }
}
