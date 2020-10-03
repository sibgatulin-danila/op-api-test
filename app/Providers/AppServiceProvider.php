<?php

namespace App\Providers;

use App\Models\RandomNumber;
use App\Observers\RandomNumberObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        RandomNumber::observe(RandomNumberObserver::class);
    }
}
