@extends('components.layout')
<body>
    <!-- owl-carousel Banner Start -->
    <section class="pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gen-banner-movies">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                            data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="true" data-loop="true" data-margin="30">

                            @foreach ($newMovies as $movie)
                                <div class="item" style="background: url('{{ $movie->image_url }}') no-repeat center center; background-size: cover; height: 700px;">
                                    <div class="gen-movie-contain h-100">
                                        <div class="container h-100">
                                            <div class="row align-items-center h-100">
                                                <div class="col-xl-6">
                                                    <div class="gen-tag-line"><span></span></div>
                                                    <div class="gen-movie-info">
                                                        <h3>{{ $movie->title }}</h3> <!-- Show title -->
                                                    </div>
                                                    <div class="gen-movie-meta-holder">
                                                        <ul>
                                                            {{-- <li class="gen-sen-rating">
                                                                <span>{{ $movie->rating }}</span> <!-- Show rating -->
                                                            </li>
                                                            <li>{{ $movie->duration }} </li> <!-- Show duration -->
                                                            <li>
                                                                <img src="images/asset-2.png" alt="streamlab-image">
                                                                <span>{{ $movie->views }}</span> <!-- Views -->
                                                            </li> --}}
                                                            <li>{{ $movie->release_year }}</li>
                                                            <!-- Year of the show -->
                                                            {{-- <li>
                                                                <a href="action.html"><span>{{ $movie->category->name ?? 'Uncategorized' }}</span></a> <!-- Show category -->
                                                            </li> --}}
                                                        </ul>
                                                        <p>{{ Str::limit($movie->description, 200) }}</p>
                                                        <!-- Description -->
                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container button-1">
                                                            <a href="{{ route('movie.show', $movie->id) }}"
                                                                class="gen-button">
                                                                <span class="text">Play Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- owl-carousel Banner End -->

    <!-- owl-carousel Videos Section-1 Start -->
    <section class="gen-section-padding-2">
        <div class="container">
            <h2>Popular Movies</h2>
            <div class="row">
                <!-- Example for displaying popular movies and shows -->
    
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="gen-style-2">
                            <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                                data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1"
                                data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">
    
                                @foreach ($popularMovies as $movie)
                                    <div class="item">
                                        <div class="movie-card">
                                            <!-- Movie Image -->
                                            <div class="movie-image-wrapper position-relative">
                                                <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}" 
                                                     class="img-fluid rounded" style="height: 400px; object-fit: cover; width: 100%;">
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
    
                                            <!-- Action Buttons -->
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
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    


    {{-- <div class="categories">
            <h2>Categories</h2>
            @foreach ($categories as $category)
                <div class="category">
                    <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="category-image">
                    <h3>{{ $category->name }}</h3>
                </div>
            @endforeach
        </div> --}}

        <section class="gen-section-padding-2">
            <div class="container">
                <h2>Popular Shows</h2>
                <div class="row">
                    <!-- Example for displaying popular movies and shows -->
        
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="gen-style-2">
                                <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                                    data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1"
                                    data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">
        
                                    @foreach ($popularShows as $show)
                                        <div class="item">
                                            <div class="movie-card">
                                                <!-- Movie Image -->
                                                <div class="movie-image-wrapper position-relative">
                                                    <img src="{{ asset($show->image_url) }}" alt="{{ $show->title }}" 
                                                         class="img-fluid rounded" style="height: 400px; object-fit: cover; width: 100%;">
                                                </div>
        
                                                <!-- Movie Info -->
                                                <div class="movie-info p-3 bg-dark text-white">
                                                    <h5 class="movie-title mb-2">{{ $show->title }}</h5>
                                                    <p class="movie-meta text-muted mb-2">
                                                        <span>{{ $show->duration }}</span> 
                                                        <span>{{ $show->genre }}</span>
                                                    </p>
                                                    <p class="movie-description mb-2">{{ Str::limit($show->description, 100) }}</p>
                                                    <p class="movie-release-date text-muted mb-0">
                                                        <strong>Release Date:</strong> {{ $show->release_date }}
                                                    </p>
                                                </div>
        
                                                <!-- Action Buttons -->
                                                <div class="movie-actions d-flex justify-content-between gap-2 p-3">
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="fa fa-heart"></i> Like
                                                    </button>
                                                    <a href="{{ route('show.show', $show->id) }}" class="btn btn-danger text-white btn-sm">
                                                        <i class="fa fa-play"></i> Play
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
        
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
    <!-- owl-carousel Videos Section-1 End -->

    <!-- owl-carousel Videos Section-2 Start -->
    <section class="gen-section-padding-2">
        <div class="container">
            <h2>Latest Releases</h2>
            <div class="row">
                <!-- Example for displaying popular movies and shows -->
    
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="gen-style-2">
                            <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                                data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1"
                                data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">
    
                                @foreach ($newMovies as $latest)
                                    <div class="item">
                                        <div class="movie-card">
                                            <!-- Movie Image -->
                                            <div class="movie-image-wrapper position-relative">
                                                <img src="{{ asset($latest->image_url) }}" alt="{{ $latest->title }}" 
                                                     class="img-fluid rounded" style="height: 400px; object-fit: cover; width: 100%;">
                                            </div>
    
                                            <!-- Movie Info -->
                                            <div class="movie-info p-3 bg-dark text-white">
                                                <h5 class="movie-title mb-2">{{ $latest->title }}</h5>
                                                <p class="movie-meta text-muted mb-2">
                                                    <span>{{ $latest->duration }}</span> 
                                                    <span>{{ $latest->genre }}</span>
                                                </p>
                                                <p class="movie-description mb-2">{{ Str::limit($latest->description, 100) }}</p>
                                                <p class="movie-release-date text-muted mb-0">
                                                    <strong>Release Date:</strong> {{ $latest->release_date }}
                                                </p>
                                            </div>
    
                                            <!-- Action Buttons -->
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
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    <!-- owl-carousel Videos Section-2 End -->

    <!-- owl-carousel images Start -->
    <section class="pt-0 pb-0 gen-section-padding-2 home-singal-silder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gen-banner-movies">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false"
                            data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="true" data-loop="true" data-margin="30">

                            @foreach ($trending as $trend)
                            <div class="item"
                                style="background: url('{{ $trend->background_image_url ?? $trend->image_url }}') no-repeat center center; background-size: cover; height: 700px;">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span>Trending</span></div>
                                                <div class="gen-movie-info">
                                                    <h3>{{ $trend->title }}</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <ul>
                                                        <li>{{ $trend->release_date }}</li>
                                                    </ul>
                                                    <p>{{ Str::limit($trend->description, 250) }}</p>
                                                </div>
                                                <div class="gen-btn-container button-1">
                                                    @if ($trend->type === 'movie')
                                                        <a href="{{ route('movie.show', $trend->id) }}" class="gen-button">
                                                            <span class="text">Watch Trailer</span>
                                                        </a>
                                                    @elseif ($trend->type === 'show')
                                                        <a href="{{ route('show.show', $trend->id) }}" class="gen-button">
                                                            <span class="text">Watch Trailer</span>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>



    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
