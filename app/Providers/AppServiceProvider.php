<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
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
        view()->composer('*', function($view){
            $categories = Category::all();
            $colors = Color::all();
            $sizes = Size::all();
            $brands = Brand::all();
            $view->with(compact('categories', 'colors', 'sizes', 'brands'));
        });
    }
}
