<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TmbdService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY'); // Ensure your API key is set in .env
    }

    public function getPopularMovies()
    {
        try {
            $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
                'api_key' => $this->apiKey,
                'language' => 'en-US',
                'page' => 1,
            ]);

            // Check if the response is successful
            if ($response->successful()) {
                $movies = $response->json();
                Log::info('TMDB API Response:', $movies);
                return $movies;  // Return the full response, including 'results'
            }

            // Log API error if the response is not successful
            Log::error('Failed to fetch movies from TMDB. Status: ' . $response->status(), [
                'response' => $response->body(),
            ]);
            return [];

        } catch (\Exception $e) {
            // Log any exceptions that occur
            Log::error('Error while calling TMDB API: ' . $e->getMessage());
            return [];
        }
    }
}
