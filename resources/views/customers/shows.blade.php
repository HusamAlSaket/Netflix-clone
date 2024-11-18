@extends('components.layout')


<!-- breadcrumb -->
<div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpg'); padding: 30px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="gen-breadcrumb-title">
                        <h1 class="text-danger" style="margin-bottom: 10px;">TV Shows</h1>
                    </div>
                    <div class="gen-breadcrumb-container">
                        <!-- Breadcrumb content here if needed -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb -->

<!-- Section-1 Start -->
<div class="container">

    <!-- Check if movies variable exists and has data -->
    @if (isset($shows) && $shows->count())
        <div class="row">
            @foreach ($shows as $show)
                <div class="col-md-4 mb-4">
                    <div class="movie type-movie status-publish has-post-thumbnail hentry">
                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                            <div class="gen-movie-contain">
                                <!-- Movie Image -->
                                <div class="gen-movie-img" style="position: relative; height: 600px; overflow: hidden;">
                                    <img src="{{ asset($show->image_url) }}" alt="{{ $show->title }}"
                                        class="img-fluid movie-img" style="height: 600px; object-fit: cover;">

                                    <!-- Action & Social Media Buttons -->
                                    <div class="gen-movie-add">
                                        <div class="wpulike wpulike-heart">
                                            <div class="wp_ulike_general_class wp_ulike_is_not_liked">

                                            </div>
                                        </div>

                                        <div class="movie-actions--link_add-to-playlist dropdown">
                                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                    class="fa fa-plus"></i></a>
                                            <div class="dropdown-menu mCustomScrollbar">
                                                <div class="mCustomScrollBox">
                                                    <div class="mCSB_container">
                                                        <a class="login-link" href="register.html">Sign in to add this
                                                            movie to a playlist.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Play Button -->


                                </div>


                                <!-- Movie Info Section -->
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

                                    <!-- Movie Description and Release Date -->
                                    <div class="gen-movie-description">
                                        <p>{{ Str::limit($show->description, 150) }}</p>
                                    </div>
                                    <div class="gen-movie-release-date">
                                        <p><strong>Release Date:</strong> {{ $show->release_date }}</p>
                                    </div>
                                    <div class="movie-actions d-flex justify-content-between gap-2 p-3">
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-heart"></i> Like
                                        </button>
                                        <a href="{{ route('show.show', $show->id) }}"
                                            class="btn btn-danger text-white btn-sm">
                                            <i class="fa fa-play"></i> Play
                                        </a>
                                    </div>
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

<!-- Section-1 End -->

<!-- footer start -->
