<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SubscribeController;


// home controllers 
Route::get('/', [HomeController::class, 'index'])->name('customers.index');
Route::get('/customers', [HomeController::class, 'index'])->name('customers.index');
Route::get('/customers/latest', [HomeController::class, 'latest'])->name('customers.latest');


// Movie Controllers
Route::get('movie/{id}', [MovieController::class, 'show'])->name('movie.show');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/customers/movies', [MovieController::class, 'movies'])->name('customers.movies');

// tv shows controllers

Route::get('/customers/shows', [ShowController::class, 'index'])->name('shows.index');
Route::get('show/{id}', [ShowController::class, 'show'])->name('show.show');


// subscribe blog watchlist pricing and contact page Controllers

Route::get('/customers/watchlist', [WatchlistController::class, 'index']);
Route::get('/watchlist', [WatchlistController::class, 'index'])->name('customers.watchlist');
Route::post('/watchlist/add', [WatchlistController::class, 'add'])->name('customers.watchlist.add');
Route::delete('/watchlist/remove/{id}', [WatchlistController::class, 'remove'])->name('customers.watchlist.remove');


Route::get('/customers/blog', [BlogController::class, 'index']); // Blog page
Route::get('/customers/contact', [ContactController::class, 'index']); // Contact us page
Route::get('/customers/pricing', [PricingController::class, 'index']); // Pricing page
Route::get('/customers/subscribe', [SubscribeController::class, 'index']); // Subscribe page


Route::get('/customers/genre/{genre}', [GenreController::class, 'show'])->name('genre.show');

// potential duplicates 

// Route::get('/customers/movies', [MovieController::class, 'index'])->name('movies.index');
// Route::get('/customers/shows/{id}', [ShowController::class, 'show'])->name('shows.show');
// Route::get('/trend/{id}', [TrendController::class, 'show'])->name('trend.show');
// Route::get('/customers/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
// Route::get('movies', [MovieController::class, 'index'])->name('movie.index');
// Route for showing movies by genre
// routes/web.php
// Route::get('/genre/{genreName}', [GenreController::class, 'show'])->name('genre.show');
// Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
