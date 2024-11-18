@extends('components.layout')
<div class="container">
    <h2 class="mb-4">Your Watchlist</h2>

    @if ($watchlist->isEmpty())
        <p class="text-center">Your watchlist is empty!</p>
    @else
        <div class="row">
            @foreach ($watchlist as $item)
                <div class="col-md-4 mb-4">
                    <div class="watchlist-item hentry">
                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                            <div class="gen-movie-contain">
                                <!-- Item Image -->
                                <div class="gen-movie-img" style="position: relative; height: 600px; overflow: hidden;">
                                    @if ($item->movie)
                                        <img src="{{ asset($item->movie->image_url) }}" alt="{{ $item->movie->title }}"
                                            class="img-fluid movie-img" style="height: 600px; object-fit: cover;">
                                    @elseif ($item->show)
                                        <img src="{{ asset($item->show->image_url) }}" alt="{{ $item->show->title }}"
                                            class="img-fluid movie-img" style="height: 600px; object-fit: cover;">
                                    @endif

                                    <!-- Play Button -->
                                    <div class="gen-movie-action">
                                        </a>
                                    </div>
                                </div>


                                <!-- Item Info Section -->
                                <div class="gen-info-contain">
                                    <div class="gen-movie-info">
                                        <h3>
                                            @if ($item->movie)
                                                <a href="#">{{ $item->movie->title }}</a>
                                            @elseif ($item->show)
                                                <a href="#">{{ $item->show->title }}</a>
                                            @endif
                                        </h3>
                                    </div>

                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            @if ($item->movie)
                                                {{-- <li><strong>Duration:</strong> {{ $item->movie->duration }}</li> --}}
                                                <li><a href="#"><span>{{ $item->movie->genre }}</span></a></li>
                                            @elseif ($item->show)
                                                <li><strong>Seasons:</strong> {{ $item->show->seasons }}</li>
                                                <li><a href="#"><span>{{ $item->show->genre }}</span></a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <!-- Description and Release Date -->
                                    <div class="gen-movie-description">
                                        <p>
                                            @if ($item->movie)
                                                {{ Str::limit($item->movie->description, 150) }}
                                            @elseif ($item->show)
                                                {{ Str::limit($item->show->description, 150) }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="gen-movie-release-date">
                                        <p>
                                            <strong>Release Date:</strong>
                                            @if ($item->movie)
                                                {{ $item->movie->release_date }}
                                            @elseif ($item->show)
                                                {{ $item->show->release_date }}
                                            @endif
                                        </p>
                                    </div>

                                </div>
                                <div class="movie-actions d-flex justify-content-between gap-2 p-3">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-heart"></i> Like
                                    </button>
                                    <a href="{{ $item->movie ? route('movie.show', $item->movie->id) : route('show.show', $item->show->id) }}"
                                        class="btn btn-danger text-white btn-sm">
                                        <i class="fa fa-play"></i> Play
                                    </a>

                                </div>

                                <!-- Remove Button -->
                                <form action="{{ route('customers.watchlist.remove', $item->id) }}" method="POST"
                                    class="remove-form mt-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-block remove-button">
                                        Remove from Watchlist
                                    </button>
                                </form>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const removeButtons = document.querySelectorAll(".remove-button");

                                        removeButtons.forEach(button => {
                                            button.addEventListener("click", function(e) {
                                                e.preventDefault();
                                                const form = button.closest(".remove-form");

                                                Swal.fire({
                                                    title: "Are you sure?",
                                                    text: "This item will be removed from your watchlist.",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#6A1B9A",
                                                    cancelButtonColor: "#1976D2",
                                                    confirmButtonText: "Yes, remove it!"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Submit the form if confirmed
                                                        form.submit();
                                                    }
                                                });
                                            });
                                        });

                                        // Show success alert if session contains delete_success message
                                        @if (session('delete_success'))
                                            Swal.fire({
                                                title: "Deleted!",
                                                text: "{{ session('delete_success') }}",
                                                icon: "success",
                                                confirmButtonText: "OK"
                                            });
                                        @endif
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
<div>
    <a type="button" class="btn btn-danger btn-block" href="{{ route('customers.index') }}">
        Back To Home Page
    </a>
</div>



<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!-- Back-to-Top end -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
