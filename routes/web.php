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

// home controllers 
Route::get('/customers', [HomeController::class, 'index'])->name('customers.index'); 
Route::get('/customers/latest', [HomeController::class, 'latest'])->name('customers.latest');

// Movie Controllers
Route::get('/customers/movies', [MovieController::class, 'index'])->name('movies.index');
// this could be a duplicate by mistake 
// Route::get('/customers/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
// Route::get('movies', [MovieController::class, 'index'])->name('movie.index');
Route::get('movie/{id}', [MovieController::class, 'show'])->name('movie.show');

// show controllers

Route::get('/customers/shows', [ShowController::class, 'index'])->name('shows.index');
// Route::get('/customers/shows/{id}', [ShowController::class, 'show'])->name('shows.show');
Route::get('show/{id}',[ShowController::class, 'show'])->name('show.show');



Route::get('/customers/watchlist', [WatchlistController::class, 'index']); // Watchlist
Route::get('/customers/blog', [BlogController::class, 'index']); // Blog page
Route::get('/customers/contact', [ContactController::class, 'index']); // Contact us page
Route::get('/customers/pricing', [PricingController::class, 'index']); // Pricing page
Route::get('/customers/subscribe', [SubscribeController::class, 'index']); // Subscribe page

