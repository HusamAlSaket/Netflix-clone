{{-- <h1>Genre: {{ $genre->name }}</h1>

    <h2>Popular Movies</h2>
    @if($popularMovies->isNotEmpty())
        <ul>
            @foreach($popularMovies as $movie)
                <li>
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->description }}</p>
                    <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}" style="width: 200px;">
                    <p>Release Date: {{ $movie->release_date }}</p>
                    <a href="{{ $movie->video_url }}" target="_blank">Watch Trailer</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No popular movies found for this genre.</p>
    @endif --}}