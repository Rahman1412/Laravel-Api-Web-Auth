<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ItemController;

Route::group([
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', [AuthController::class,"login"]);
    Route::post('register', [AuthController::class,"register"]);
});


Route::middleware(["auth","auth:api"])->group(function(){
    Route::post('logout', [AuthController::class,"logout"]);
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me',[AuthController::class,"me"]);
    Route::get('getitems',[ItemController::class,"getItems"]);
});
