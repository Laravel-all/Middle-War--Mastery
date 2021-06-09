<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumController;
use App\Http\Middleware\CheckStatus;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([CheckStatus::class])->group(function () {
    Route::get('home',[HomeController::class],'home');
});


Route::middleware(['basicAuth'])->group(function () {
    //All the routes are placed in here
    Route::get('/', 'LoginController@index');
    Route::get('/home', 'DashboardController@dashboard');
});

Route::get('/test', [HumController::class,'test'])->middleware('tom');


Route::get('showage', 
[
    "uses" => "showAge@index",
    "middleware" => "CheckAge"

],
);