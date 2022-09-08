<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userpanel\DashboardController;

// use App\Http\Controllers\Userpanel\DashboardController;
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

Route::get('/test', [\App\Http\Controllers\HomeController::class,'index']);

Route::group(['namespace' => 'Userpanel',], function(){
    Route::get('/dashboard', [DashboardController::class,'index']);
});
