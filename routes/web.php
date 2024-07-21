<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\webController;
use App\Http\Controllers\web\AjaxController;

Route::view("/","web.index");


Route::controller(webController::class)->group(function(){
    Route::get("/","index");
    Route::get("register","register")->name("web/register");
Route::get("login","login")->name("web/login");

Route::post("Dataregister","Dataregister")->name("web/Dataregister");
Route::post("Datalogin","Datalogin")->name("web/Datalogin");

Route::get("logout","logout")->name("web/logout");

});

Route::controller(AjaxController::class)->group(function(){
Route::post("addCart","addCart");
Route::post("Delete_item","Delete_item");

});
