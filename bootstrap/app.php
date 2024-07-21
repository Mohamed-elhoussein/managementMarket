<?php

use App\Http\Middleware\login;
use App\Http\Middleware\logout;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then:function(){
            Route::middleware("web")
            ->prefix("dash")
            ->group(base_path("routes/dash.php"));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "AdminLogin"=>login::class,
            "AdminLogout"=>logout::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
