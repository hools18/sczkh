<?php

namespace App\Providers;


use App\Models\Claim;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Routing\UrlGenerator;
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
        Relation::morphMap([
            'claim' => Claim::class,
        ]);
    }
}
