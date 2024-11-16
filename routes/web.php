<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers', [CustomerController::class,'index'])->name('customers.index');
Route::get('/customers/pricing', [CustomerController::class,'pricing'])->name('customers.pricing');