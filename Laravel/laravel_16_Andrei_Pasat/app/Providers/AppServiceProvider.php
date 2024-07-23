<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Extra;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('brands')){
            View::share('brands', Brand::all());
            }
        if(Schema::hasTable('extras')){
            View::share('extras', Extra::all());
            }
    }
}
