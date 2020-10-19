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
        // try {
        //     DB::connection()->getPdo();

        //     view()->share(
        //         'dataNavigasiCategory',
        //         Category::orderBy('nama')->get()
        //     );

        // } catch (\Exception $e) {
        //     die("Could not connect to the database.
        //         Please check your configuration. error:" . $e);
        // }

        if (! $this->app->runningInConsole()) {
            view()->share(
                'dataNavigasiCategory',
                Category::orderBy('nama')->get()
            );
        }
    }
}
