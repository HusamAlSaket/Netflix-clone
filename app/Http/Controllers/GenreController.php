<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function show($genreName)
    {
        $genre = Genre::where('name', $genreName)->firstOrFail();
    
        $popularMovies = $genre->movies()->where('is_popular', true)->get();
        dd($popularMovies);

        return view('customers.genre.show', compact('genre', 'popularMovies'));
    }
    public function index() {

        $genres = Genre::all();
        return view('genre.show', compact('genres'));
    }
    
    
    
}
