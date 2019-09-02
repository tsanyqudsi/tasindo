<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use App\FormFields\DisabledFormField;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(DisabledFormField::class);
        Voyager::addAction(\App\Actions\PrintNote::class);
        Voyager::addAction(\App\Actions\ShowLess::class);
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
    }
}
