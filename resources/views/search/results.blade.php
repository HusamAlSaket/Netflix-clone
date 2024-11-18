@extends('components.layout')
@section('content')

<div class="container mt-4">

    @if($movies->isEmpty() && $shows->isEmpty())
        <p class="text-center">No results found.</p>
    @else
        <div class="row">
            
            {{-- Movies Section --}}
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="movie type-movie status-publish has-post-thumbnail hentry">
                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                            <div class="gen-movie-contain">
                                <!-- Movie Image -->
                                
                                <div class="gen-movie-img" style="position: relative; height: 600px; overflow: hidden;">
                                    <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}" 
                                    class="img-fluid movie-img" style="height: 600px; object-fit: cover;">
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

            {{-- Shows Section --}}
            @foreach ($shows as $show)
                <div class="col-md-4 mb-4">
                    <div class="movie type-movie status-publish has-post-thumbnail hentry">
                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                            <div class="gen-movie-contain">
                                <!-- Show Image -->
                                <div class="gen-movie-img" style="position: relative; height: 600px; overflow: hidden;">
                                    <img src="{{ asset($show->image_url) }}" alt="{{ $show->title }}" 
                                    class="img-fluid movie-img" style="height: 600px; object-fit: cover;">
                                </div>

                                <!-- Show Info Section -->
                                <div class="gen-info-contain">
                                    <div class="gen-movie-info">
                                        <h3>
                                            <a href="{{ route('show.show', $show->id) }}">{{ $show->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            <li>{{ $show->duration }}</li>
                                            <li><a href="#"><span>{{ $show->genre }}</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="gen-movie-description">
                                        <p>{{ Str::limit($show->description, 150) }}</p>
                                    </div>
                                    <div class="gen-movie-release-date">
                                        <p><strong>Release Date:</strong> {{ $show->release_date }}</p>
                                    </div>
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-heart"></i> Like
                                    </button>
                                    <a href="{{ route('show.show', $show->id) }}" class="btn btn-danger text-white btn-sm">
                                        <i class="fa fa-play"></i> Play
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection