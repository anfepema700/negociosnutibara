<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CustomersController;

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
Route::resource('cities',CitiesController::class);
Route::resource('customers',CustomersController::class);


/*
Route::get('/cities', function () {
    return view('cities.index');
});

Route::get('cities/create',[EmpleadoController::class,'create']);
*/

/*acces to route by classes*/




