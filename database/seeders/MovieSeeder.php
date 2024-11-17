<?php
// MovieSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre; // Make sure to import Genre model

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch some genres (or create them if they don't exist)
        $action = Genre::firstOrCreate(['name' => 'Action']);
        $sciFi = Genre::firstOrCreate(['name' => 'Sci-Fi']);
        $drama = Genre::firstOrCreate(['name' => 'Drama']);
        $thriller = Genre::firstOrCreate(['name' => 'Thriller']);

        // Create movies and associate genres with each movie
        $movie1 = Movie::create([
            'title' => 'The Matrix',
            'description' => 'A hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'release_date' => 1999,
            'is_popular' => true,
            'image_url' => 'images/thematrixx.jpg',
            'video_url' => 'https://www.youtube.com/embed/vKQi3bBA1y8',
        ]);
        $movie1->genres()->attach([$action->id, $sciFi->id]); // Attach genres

        $movie2 = Movie::create([
            'title' => 'Inception',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
            'release_date' => 2010,
            'is_popular' => true,
            'image_url' => 'images/the-inception.jfif',
            'video_url' => 'https://www.youtube.com/embed/YoHD9XEInc0',
        ]);
        $movie2->genres()->attach([$action->id, $sciFi->id]); // Attach genres

        $movie3 = Movie::create([
            'title' => 'The Dark Knight',
            'description' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
            'release_date' => 2008,
            'is_popular' => true,
            'image_url' => 'images/darknightt.jpg',
            'video_url' => 'https://www.youtube.com/embed/EXeTwQWrcwY',
        ]);
        $movie3->genres()->attach([$action->id, $thriller->id]); // Attach genres

        $movie4 = Movie::create([
            'title' => 'Interstellar',
            'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
            'release_date' => 2014,
            'is_popular' => false,
            'image_url' => 'images/maxresdefault.jpg',
            'video_url' => 'https://www.youtube.com/embed/2LqzF5WauAw',
        ]);
        $movie4->genres()->attach([$sciFi->id, $drama->id]); // Attach genres

        $movie5 = Movie::create([
            'title' => 'Extraction 2',
            'description' => 'After barely surviving his grievous wounds from his mission in Dhaka, Bangladesh, Tyler Rake is back, and his team is ready to take on their next mission.',
            'release_date' => '2023',
            'is_popular' => true,
            'image_url' => 'images/extraction.jpg',
            'video_url' => 'https://www.youtube.com/embed/Y274jZs5s7s',
        ]);
        $movie5->genres()->attach([$action->id]); // Attach genre

        $movie6 = Movie::create([
            'title' => 'Lift',
            'description' => 'Follows a master thief and his Interpol Agent ex-girlfriend who team up to steal $500 million in gold bullion being transported on an A380 passenger flight.',
            'release_date' => '2024',
            'is_popular' => true,
            'image_url' => 'images/lift.jpg',
            'video_url' => 'https://www.youtube.com/embed/m2L-Sa_6MU0',
        ]);
        $movie6->genres()->attach([$action->id]); // Attach genre

        $movie7 = Movie::create([
            'title' => 'Red Notice',
            'description' => 'An Interpol agent successfully tracks down the world most wanted art thief with help from a rival thief. But nothing is as it seems as a series of double-crosses ensues.',
            'release_date' => '2021',
            'is_popular' => true,
            'image_url' => 'images/rednotice.jpg',
            'video_url' => 'https://www.youtube.com/embed/T6l3mM7AWew',
        ]);
        $movie7->genres()->attach([$action->id]); // Attach genre

        $movie8 = Movie::create([
            'title' => '6 Undergrounds',
            'description' => 'It follows a group of people who fake their deaths and decide to form a vigilante team in order to stage a coup detat against a ruthless dictator.',
            'release_date' => '2019',
            'is_popular' => true,
            'image_url' => 'images/1178893.jpg',
            'video_url' => 'https://www.youtube.com/embed/YLE85olJjp8',
        ]);
        $movie8->genres()->attach([$action->id]); // Attach genre
    }
    

}
