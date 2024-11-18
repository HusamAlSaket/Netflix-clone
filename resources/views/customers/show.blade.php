@extends('components.layout')

<!--=========== Loader =============-->


<section class="gen-section-padding-3 gen-single-video">
    <div class="container">
        <div class="row align-items-center">
            <!-- Check if it's a movie -->
            @if (isset($movie))
                <div class="col-md-6">
                    <!-- Movie Image -->
                    <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->title }}"
                        class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6">
                    <div class="movie-detail">
                        <h2 class="mb-3">{{ $movie->title }}</h2>
                        <p class="mb-4">{{ $movie->description }}</p>

                        <!-- Add to Watchlist Button -->
                        <form action="{{ route('customers.watchlist.add') }}" method="POST" class="add-form">
                            @csrf
                            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add to Watchlist
                            </button>
                        </form>
                    </div>
                </div>
            @endif

            <!-- Check if it's a show -->
            @if (isset($show))
                <div class="col-md-6">
                    <!-- Show Image -->
                    <img src="{{ asset($show->image_url) }}" alt="{{ $show->title }}"
                        class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6">
                    <div class="show-detail">
                        <h2 class="mb-3">{{ $show->title }}</h2>
                        <p class="mb-4">{{ $show->description }}</p>

                        <!-- Add to Watchlist Button -->
                        <form action="{{ route('customers.watchlist.add') }}" method="POST" class="add-form">
                            @csrf
                            <input type="hidden" name="show_id" value="{{ $show->id }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add to Watchlist
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
        <!-- Video Section -->
        @if ((isset($movie) && $movie->video_url) || (isset($show) && $show->video_url))
            <div class="row mt-5">
                <div class="col-12">
                    <div class="gen-video-holder">
                        <iframe width="100%" height="550px" src="{{ $movie->video_url ?? $show->video_url }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Show success alert if session contains success message
        @if (session('success'))
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        @endif
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Single Video End -->