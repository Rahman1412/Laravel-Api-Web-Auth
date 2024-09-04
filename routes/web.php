<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->middleware("logingaurd");

Route::get('/home', function () {
    return view('home');
})->middleware("authgaurd");

Route::post('/login',[AuthController::class,'login']);

Route::get("/logout",[AuthController::class,'logout']);
