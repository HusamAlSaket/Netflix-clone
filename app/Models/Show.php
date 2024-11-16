<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'release_date', 'rating', 'image_url'];

    // Many-to-many relationship with Genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'show_genre');
    }

    // Many-to-many relationship with Actor
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'show_actor');
    }
    public function watchlists()
    {
        return $this->belongsToMany(Watchlist::class);
    }
}
