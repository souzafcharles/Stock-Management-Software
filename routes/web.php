<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\StockController;

Route::get('/', [StockController::class, 'index']);
Route::get('/stocks/create', [StockController::class, 'create'])->middleware('auth');
Route::get('/stocks/{id}', [StockController::class, 'show']);
Route::post('/stocks', [StockController::class, 'store']);
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->middleware('auth');
Route::get('/stocks/edit/{id}', [StockController::class, 'edit'])->middleware('auth');
Route::put('/stocks/update/{id}', [StockController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [StockController::class, 'dashboard'])->middleware('auth');