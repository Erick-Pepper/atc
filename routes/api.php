<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('V1/acs', App\Http\Controllers\Api\V1\AcController::Class)->only(['index','show','destroy'])
->middleware('auth:sanctum');

Route::post('login',[App\Http\Controllers\Api\LoginController::class,
'login'
]);