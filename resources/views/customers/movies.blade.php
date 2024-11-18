@extends('components.layout')

<div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpg'); padding: 30px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="gen-breadcrumb-title">
                        <h1 class="text-danger" style="margin-bottom: 10px;">Movies</h1>
                    </div>
                    <div class="gen-breadcrumb-container">
                        <!-- Breadcrumb content here if needed -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

        <!-- Check if movies variable exists and has data -->
        @if(isset($movies) && $movies->count())
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-4 mb-4">
                        <div class="movie type-movie status-publish has-post-thumbnail hentry">
                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                <div class="gen-movie-contain">
                                    <!-- Movie Image -->
                                    <div class="gen-movie-img" style="position: relative; height: 600px; overflow: hidden;">
                                        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}" 
                                        class="img-fluid movie-img" style="height: 600px; object-fit: cover;">
                                        
                                        <!-- Action & Social Media Buttons -->
                                        <div class="gen-movie-add">
                                            <div class="wpulike wpulike-heart">
                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                </div>
                                            </div>
                                
                                            
                                        </div>
    
                                        <!-- Play Button -->
                                    
                                    </div>
    
                                    <!-- Movie Info Section -->
                                    <div class="gen-info-contain">
                                        <div class="gen-movie-info">
                                            <h3>
                                                <a href="{{ route('movie.show', $movie->id) }}">{{ $movie->title }}</a>
                                            </h3>
                                        </div>
                                        <div class="gen-movie-meta-holder">
                                            <ul>
                                                <li>{{ $movie->duration }}</li>
                                                <li><a href="#"><span>{{ $movie->genre }}</span></a></li>
                                            </ul>
                                        </div>
    
                                        <!-- Movie Description and Release Date -->
                                        <div class="gen-movie-description">
                                            <p>{{ Str::limit($movie->description, 150) }}</p>
                                        </div>
                                        <div class="gen-movie-release-date">
                                            <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
                                        </div>
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-heart"></i> Like
                                        </button>
                                        <a href="{{ route('movie.show', $movie->id) }}" class="btn btn-danger text-white btn-sm">
                                            <i class="fa fa-play"></i> Play
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No movies available.</p>
        @endif
    </div>

    