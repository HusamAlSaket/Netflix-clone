<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'movie_id', 'show_id'];

    // Singular names for relationships
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function show()
    {
        return $this->belongsTo(Show::class, 'show_id');
    }
}
