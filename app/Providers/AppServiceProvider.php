<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        Paginator::useBootstrap();
        foreach(config("permissions.per_user") as $val){

            Gate::define($val,function($data)use($val){

                $per_user=Auth::guard("admin")->user()->permission;
                return in_array($val,$per_user);

            });

        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
