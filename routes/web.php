<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

Route::get('/', [pizzaController::class,'welcome']);
Route::get('/pizza', [pizzaController::class,'index']);  
Route::get('/pizza/create', [pizzaController::class,'create'] );
Route::post('/pizzas', [pizzaController::class, 'store']);
Route::get('/pizza/{id}', [pizzaController::class,'show']);
Route::get('/delete/{id}',[pizzaController::class,'destroy']);


