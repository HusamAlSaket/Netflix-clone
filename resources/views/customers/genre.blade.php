@extends('components.layout')

<div class="container">
    @if (isset($movies) && $movies->count())
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="movie-card">
                        <!-- Movie Image -->
                        <div class="movie-image-wrapper position-relative">
                            <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}" class="img-fluid rounded"
                                style="height: 400px; object-fit: cover; width: 100%;">
                            <!-- Play Button -->

                        </div>
                        <!-- Movie Info -->
                        <div class="movie-info p-3 bg-dark text-white">
                            <h5 class="movie-title mb-2">{{ $movie->title }}</h5>
                            <p class="movie-meta text-muted mb-2">
                                <span>{{ $movie->duration }}</span> 
                                <span>{{ $movie->genre }}</span>
                            </p>
                            <p class="movie-description mb-2">{{ Str::limit($movie->description, 100) }}</p>
                            <p class="movie-release-date text-muted mb-0">
                                <strong>Release Date:</strong> {{ $movie->release_date }}

                            </p>

                        </div>
                        <!-- Social Buttons -->
                        <div class="movie-actions d-flex justify-content-between gap-2 p-3">
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fa fa-heart"></i> Like
                            </button>
                            <a href="{{ route('movie.show', $movie->id) }}" class="btn btn-danger text-white btn-sm">
                                <i class="fa fa-play"></i> Play
                            </a>
                        </div>
                        

                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No movies available.</p>
    @endif
</div>
