<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\Apis;
use Facade\FlareClient\Api;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('register', [AuthController::class,'register']);
// Route::post('login', [AuthController::class,'login']);

// route::apiResource('projects',ProjectController::class)->middlware('auth:api');


Route::post('/register_apis',[Apis::class,'register']);
Route::post('/login_apis',[Apis::class,'login']);

Route::middleware('auth:api')->get('/details', [Apis::class,'tasklist']);
});
