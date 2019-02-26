<?php

namespace App\Providers;

use App\Country;
use App\Category;
use App\Product;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          Product::observe(ProductObserver::class);
          $countries=Country::all();
          $Categories=Category::where('parent_id',Null)->with('childs')->get();

          View::share('countries', $countries);
          View::share('Categories', $Categories);

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
