<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Show;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $movies = Movie::where('title', 'LIKE', "%{$query}%")->get();
        $shows = Show::where('title', 'LIKE', "%{$query}%")->get();

        return view('search.results', compact('movies', 'shows', 'query'));
    }
}
