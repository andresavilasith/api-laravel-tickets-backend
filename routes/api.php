<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('city', CityController::class,['except'=>['create','store','edit','update','destroy']])->names('city');
Route::resource('airline', AirlineController::class,['except'=>['create','store','edit','update','destroy']])->names('airline');
Route::resource('route', RouteController::class,['except'=>['create','store','edit','update','destroy']])->names('route');
Route::resource('ticket', TicketController::class,['except'=>['create','store','edit','update','destroy']])->names('ticket');
