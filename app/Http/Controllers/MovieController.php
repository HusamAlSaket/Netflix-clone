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
    public function movies()
    {
        $movies = Movie::all(); // Fetch all movies or your specific logic here
        return view('customers.movies', compact('movies')); // Pass the variable to the view
    }
    
}
