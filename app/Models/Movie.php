<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'release_date', 'rating', 'image_url'];


    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }


    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actor');
    }


    public function watchlists()
    {
        return $this->belongsToMany(Watchlist::class);
    }
}
