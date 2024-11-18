<?php
namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function show($genre)
    {
        $genreData = Genre::where('name', $genre)->with('movies')->first();

        if (!$genreData) {
            abort(404, 'Genre not found');
        }

        return view('customers.genre', [
            'genre' => $genreData->name,
            'movies' => $genreData->movies
        ]);
    }
}
