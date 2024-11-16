<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Movie::create([
            'title' => 'The Matrix',
            'description' => 'A hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'release_date' => 1999,
            'is_popular' => true, 
        'image_url' => 'images/the-matrix.jpg',
        ]);

        Movie::create([
            'title' => 'Inception',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
            'release_date' => 2010,
            'is_popular' => true, 
        'image_url' => 'images/the-inception.jfif',
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'description' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
            'release_date' => 2008,
            'is_popular' => true, 
            'image_url' => 'images/thedark-knight.jfif',
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
            'release_date' => 2014,
            'is_popular' => false, 
            'image_url' => 'images/interstellar.jfif',
        ]);
        Movie::create([
            'title' => 'extraction 2',
            'description' => 'After barely surviving his grievous wounds from his mission in Dhaka, Bangladesh, Tyler Rake is back, and his team is ready to take on their next mission.',
            'release_date' => '2023',
            'is_popular' => true, 
            'image_url' => 'images/extraction.jpg',
        ]);


    }
}
