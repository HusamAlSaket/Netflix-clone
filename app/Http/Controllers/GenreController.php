<?php

// namespace App\Http\Controllers;

// use App\Models\Genre;

// class GenreController extends Controller
// {
//     public function show($genreName)
//     {
//         // Fetch genre by name
//         $genre = Genre::where('name', $genreName)->firstOrFail();
    
//         // Fetch popular movies associated with this genre
//         $popularMovies = $genre->movies()->where('is_popular', true)->get();
//         dd($popularMovies);

//         // Pass the data to the correct view
//         return view('customers.genre.show', compact('genre', 'popularMovies'));
//     }
//     public function index() {
//         // Fetch all genres or display a message
//         $genres = Genre::all();
//         return view('genre.index', compact('genres'));
//     }
    
    
    
// }
