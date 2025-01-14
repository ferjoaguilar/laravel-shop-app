<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// LLAMAR CONTROLLER
use App\Http\Controllers\UserController;


Route::group(['prefix' => '/users'], function(){

    Route::get('/', [UserController::class, 'getAllUsers']);

});