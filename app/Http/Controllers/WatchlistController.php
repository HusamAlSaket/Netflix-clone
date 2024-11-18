<?php
namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    public function index()
    {
        // Use the corrected relationship names for eager loading
        $watchlist = Watchlist::with(['movie', 'show'])->get();

        // Optional: Debugging
        // dd($watchlist);

        return view('customers.watchlist', compact('watchlist'));
    }

    public function add(Request $request)
    {
        Watchlist::create($request->all());
        return redirect()->route('customers.watchlist')->with('success','item successfully added to your watchlist!');
    }

    public function remove($id)
    {
        $watchlistItem = Watchlist::findOrFail($id);
        $watchlistItem->delete();
        return redirect()->route('customers.watchlist');
    }
}
