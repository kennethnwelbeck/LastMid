<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BuyerController;
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

Route::get('/hardware', function () {
    return view('hardware');
});


Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/rollback', function () {
    Artisan::call('migrate:rollback');
    echo Artisan::output();
});

Route::get('/reset', function () {
    Artisan::call('migrate:reset');
    echo Artisan::output();
});


Route::resource('/hardware', HardwareController::class);
Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/orders', OrderController::class);
Route::resource('/buyers', BuyerController::class);