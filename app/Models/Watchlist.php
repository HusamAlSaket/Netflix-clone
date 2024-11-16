<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
    public function shows()
    {
        return $this->belongsToMany(Show::class);
    }
}
