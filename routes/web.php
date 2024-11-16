<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SubscribeController;

Route::get('/customers', [HomeController::class, 'index'])->name('customers.index'); 
Route::get('/customers/latest', [HomeController::class, 'latest'])->name('customers.latest');
Route::get('/customers/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/customers/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/customers/shows', [ShowController::class, 'index'])->name('shows.index');
Route::get('/customers/shows/{id}', [ShowController::class, 'show'])->name('shows.show');



Route::get('/customers/watchlist', [WatchlistController::class, 'index']); // Watchlist
Route::get('/customers/blog', [BlogController::class, 'index']); // Blog page
Route::get('/customers/contact', [ContactController::class, 'index']); // Contact us page
Route::get('/customers/pricing', [PricingController::class, 'index']); // Pricing page
Route::get('/customers/subscribe', [SubscribeController::class, 'index']); // Subscribe page
Route::get('movie/{id}', [MovieController::class, 'show'])->name('movie.show');
Route::get('show/{id}',[ShowController::class, 'show'])->name('show.show');
