<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    public function index()
    {
        $watchlist = Watchlist::all();
        return view('customers.watchlist', compact('watchlist'));
    }

    public function add(Request $request)
    {
        $watchlist = Watchlist::create($request->all());
        return redirect()->route('customers.watchlist');
    }

    public function remove($id)
    {
        $watchlist = Watchlist::findOrFail($id);
        $watchlist->delete();
        return redirect()->route('customers.watchlist');
    }
}
