<?php

namespace App\Http\Controllers;

use App\Models\Show;
// use App\Models\Movie;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::all();
        return view('customers.shows', compact('shows'));
    }

    public function show($id)
    {
        $show = Show::findOrFail($id);
        return view('customers.show', compact('show'));
    }
}
