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
                                                        <p>{{ Str::limit($movie->description, 100) }}</p>
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
                                        <div class="movie type-movie status-publish has-post-thumbnail hentry">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <!-- Movie Image -->
                                                    <div class="gen-movie-img"
                                                        style="position: relative; height: 600px; overflow: hidden;">
                                                        <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}"
                                                            class="img-fluid movie-img"
                                                            style="height: 600px; object-fit: cover;">

                                                        <!-- Action & Social Media Buttons -->
                                                  
                                                        <div class="gen-movie-action">
                                                            <a href="{{ route('movie.show', $movie->id) }}"
                                                                class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Movie Info Section (Title, Description, Release Date) -->
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a
                                                                    href="{{ route('movie.show', $movie->id) }}">{{ $movie->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>{{ $movie->duration }}</li>

                                                                <li><a
                                                                        href="#"><span>{{ $movie->genre }}</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- Movie Description and Release Date -->
                                                        <div class="gen-movie-description">
                                                            <p>{{ $movie->description }}</p>
                                                        </div>
                                                        <div class="gen-movie-release-date">
                                                            <p><strong>Release Date:</strong>
                                                                {{ $movie->release_date }}</p>
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

                                @foreach ($popularShows as $Show)
                                    <div class="item">
                                        <div class="movie type-movie status-publish has-post-thumbnail hentry">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <!-- Movie Image -->
                                                    <div class="gen-movie-img"
                                                        style="position: relative; height: 600px; overflow: hidden;">
                                                        <img src="{{ $Show->image_url }}" alt="{{ $Show->title }}"
                                                            class="img-fluid movie-img"
                                                            style="height: 600px; object-fit: cover;">

                                                        <!-- Action & Social Media Buttons -->
                                                      
                                                        <div class="gen-movie-action">
                                                            <a href="{{ route('show.show', $Show->id) }}"
                                                                class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Movie Info Section (Title, Description, Release Date) -->
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a
                                                                    href="{{ route('show.show', $Show->id) }}">{{ $Show->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>{{ $Show->duration }}</li>

                                                                <li><a
                                                                        href="#"><span>{{ $Show->genre }}</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- Movie Description and Release Date -->
                                                        <div class="gen-movie-description">
                                                            <p>{{ $Show->description }}</p>
                                                        </div>
                                                        <div class="gen-movie-release-date">
                                                            <p><strong>Release Date:</strong> {{ $Show->release_date }}
                                                            </p>
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

        </div>
    </section>

    <!-- owl-carousel Videos Section-1 End -->

    <!-- owl-carousel Videos Section-2 Start -->
    <section class="pt-0 gen-section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h4 class="gen-heading-title">New Releases</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                    <div class="gen-movie-action">
                        <div class="gen-btn-container text-right">
                            {{-- <a href="{{ route('movies.index') }}" class="gen-button gen-button-flat"> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="gen-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                            data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="false" data-loop="false" data-margin="30">

                            @foreach ($newMovies as $latest)
                                <div class="item">
                                    <div class="movie type-movie status-publish has-post-thumbnail hentry">
                                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                            <div class="gen-movie-contain">
                                                <!-- Movie Image -->
                                                <div class="gen-movie-img"
                                                    style="position: relative; height: 600px; overflow: hidden;">
                                                    <img src="{{ $latest->image_url }}" alt="{{ $latest->title }}"
                                                        class="img-fluid movie-img"
                                                        style="height: 600px; object-fit: cover;">
                                                
                                                    <div class="gen-movie-action">
                                                        <a href="{{ route('movie.show', $latest->id) }}"
                                                            class="gen-button">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Movie Info -->
                                                <div class="gen-info-contain">
                                                    <div class="gen-movie-info">
                                                        <h3><a
                                                                href="{{ route('movie.show', $latest->id) }}">{{ $latest->title }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="gen-movie-meta-holder">

                                                        <div class="gen-movie-description">
                                                            <p>{{ $latest->description }}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($newShows as $lshows)
                                <div class="item">
                                    <div class="movie type-movie status-publish has-post-thumbnail hentry">
                                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                            <div class="gen-movie-contain">
                                                <!-- Movie Image -->
                                                <div class="gen-movie-img"
                                                    style="position: relative; height: 600px; overflow: hidden;">
                                                    <img src="{{ $lshows->image_url }}" alt="{{ $lshows->title }}"
                                                        class="img-fluid movie-img"
                                                        style="height: 600px; object-fit: cover;">
                                                    <div class="gen-movie-add">
                                                        <div class="wpulike wpulike-heart">
                                                            <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                <button type="button"
                                                                    class="wp_ulike_btn wp_ulike_put_image"></button>
                                                            </div>
                                                        </div>
                                                        <ul class="menu bottomRight">
                                                            <li class="share top">
                                                                <i class="fa fa-share-alt"></i>
                                                                <ul class="submenu">
                                                                    <li><a href="#" class="facebook"><i
                                                                                class="fab fa-facebook-f"></i></a></li>
                                                                    <li><a href="#" class="instagram"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                                                    <li><a href="#" class="twitter"><i
                                                                                class="fab fa-twitter"></i></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <div class="movie-actions--link_add-to-playlist dropdown">
                                                            <a class="dropdown-toggle" href="#"
                                                                data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                            <div class="dropdown-menu mCustomScrollbar">
                                                                <div class="mCustomScrollBox">
                                                                    <div class="mCSB_container">
                                                                        <a class="login-link" href="#">Sign in
                                                                            to add this
                                                                            movie to a
                                                                            playlist.</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <a href="{{ route('show.show', $lshows->id) }}"
                                                            class="gen-button">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Movie Info -->
                                                <div class="gen-info-contain">
                                                    <div class="gen-movie-info">
                                                        <h3><a
                                                                href="{{ route('show.show', $lshows->id) }}">{{ $lshows->title }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="gen-movie-meta-holder">

                                                        <div class="gen-movie-description">
                                                            <p>{{ $movie->description }}</p>
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
                                                    <p>{{ Str::limit($trend->description, 200) }}</p>
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
