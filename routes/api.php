<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Register;
use App\Http\Controllers\Api\UserController;





Route::post("login",[Login::class,"login"])->name("login");
Route::post("Register",[Register::class,"Register"])->name("Register");


Route::apiResource("user",UserController::class)->middleware('auth:sanctum');




// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
