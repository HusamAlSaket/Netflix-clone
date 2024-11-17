<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Show;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Fetching popular movies, shows, and categories
        $popularMovies = Movie::where('is_popular', true)->take(5)->get();
        $popularShows = Show::where('is_popular', true)->take(5)->get();
        $categories = Category::all();

        // Fetch the latest movies and shows
        $newMovies = $this->getLatestMovies();
        $newShows = $this->getLatestShows();

        // fetch the trending movies and shows using slider
        $trendingMovies=Movie::orderBy('rating','desc')->take(5)->get();
        $trendingShows=Show::orderBy('rating','desc')->take(5)->get();
        $trending=$trendingMovies->merge($trendingShows);


        // Passing data to view
        return view('customers.index', compact('popularMovies', 'popularShows', 'categories', 'newMovies', 'newShows','trending'));
    }

    private function getLatestMovies()
    {
        // Fetch the latest 10 movies
        return Movie::orderBy('release_date', 'desc')->take(10)->get();
    }

    private function getLatestShows()
    {
        // Fetch the latest 10 shows
        return Show::orderBy('release_date', 'desc')->take(10)->get();
    }

    public function latest()
    {
        // Use the same data from the index method
        $newMovies = $this->getLatestMovies();
        $newShows = $this->getLatestShows();

        // Returning the same data to the view (avoid duplication in code)
        return view('customers.index', compact('newMovies', 'newShows'));
    }
}
