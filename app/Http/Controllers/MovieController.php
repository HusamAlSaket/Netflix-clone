<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Category;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('customers.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('customers.show', compact('movie'));
    }
}
