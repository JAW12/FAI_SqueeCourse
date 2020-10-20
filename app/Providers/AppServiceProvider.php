<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        // share data with all views
        
        // cek dulu runningInConsole apa gak. fresh deployment = runningInConsole
        // kalo ga dicek nanti error waktu composer install
        if (! $this->app->runningInConsole()) {
            view()->share(
                'dataNavigasiCategory',
                Category::orderBy('nama')->get()
            );
        }
    }
}
