<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightLogsController;
use App\Http\Controllers\WeightTargetController;

Route::middleware('auth')->group(function(){
    Route::get('/register/step2',[WeightLogsController::class,'create']);
    Route::get('/weight_logs',[WeightLogsController::class,'index']);
    Route::post('/weight_logs/create',[WeightLogsController::class,'store']);
    Route::get('/wight_logs/goal_setting',[WeightTargetController::class,'edit']);
    Route::get('/weight_logs/{:weightLogId}/update', [WeightLogsController::class, 'show']);
});

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
