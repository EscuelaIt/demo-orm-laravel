<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('/add-country', [FrontController::class, 'addCountry']);
Route::get('/countries', [FrontController::class, 'listCountry']);
Route::get('/country-edit/{id}', [FrontController::class, 'EditCountry']);

Route::get('/add-customer/{name}', [FrontController::class, 'addCustomer']);
Route::get('/customers', [FrontController::class, 'listCustomer']);
Route::get('/customers-remove/{id}', [FrontController::class, 'removeCustomer']);

