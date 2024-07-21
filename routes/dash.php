<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\dash\UserController;
use App\Http\Controllers\dash\loginController;
use App\Http\Controllers\dash\logoutController;

Route::resource("user",UserController::class)->middleware("AdminLogin");
Route::resource("product",ProductController::class)->middleware("AdminLogin");

Route::controller(loginController::class)->middleware('AdminLogout')->group(function(){
Route::get("login","index")->name("dash/login");
Route::post("CheckLogin","CheckLogin")->name("dash/CheckLogin");
});


Route::get("logout",[logoutController::class,"logout"])->middleware("AdminLogin");