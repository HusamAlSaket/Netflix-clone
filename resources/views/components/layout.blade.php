<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Streamlab - Video Streaming HTML5 Template" />
    <meta name="description" content="Streamlab - Video Streaming HTML5 Template" />
    <meta name="author" content="StreamLab" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Streamlab - Video Streaming HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <!--=========== Loader =============-->
    <div id="gen-loading">
        <div id="gen-loading-center">
            <img src="{{ asset('images/logo-1.png') }}" class="gen-footer-logo" alt="gen-footer-logo">
        </div>
    </div>
    <!--=========== Loader =============-->

    <!--========== Header ==============-->
    <header id="gen-header" class="gen-header-style-1 gen-has-sticky">


        <div class="gen-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('images/logo-1.png') }}" class="gen-footer-logo" alt="gen-footer-logo">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain d-flex align-items-center w-100">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item active">
                                            <a href="{{ route('customers.index') }}" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('customers.movies') }}">Movies</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                @foreach (App\Models\Genre::all() as $genre)
                                                    <li class="menu-item">
                                                        <a href="{{ route('genre.show', $genre->name) }}">{{ $genre->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('shows.index') }}">Tv Shows</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <!-- Existing TV show categories here -->
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('customers.watchlist') }}">WatchList</a>
                                        </li>
                                    </ul>
                                    <form action="{{ route('search') }}" method="GET" class="d-flex ml-auto align-items-center">
                                        <input type="text" name="query" class="form-control form-control-sm me-2" placeholder="Search" required>
                                        <button type="submit" class="btn btn-danger btn-sm">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
                                        
                                        <!-- Other Menu Items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <!-- User Menu and Other Items -->
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        @yield('content') <!-- Main Content Placeholder -->
    </div>
    {{-- <main class ="container">
        {{ $slot }}
        </main>
         --}}
    <footer id="gen-footer">
        <div class="gen-footer-style-1">
            <div class="gen-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{ asset('images/logo-1.png') }}" class="gen-footer-logo"
                                            alt="gen-footer-logo">
                                        <p>follow us on our other social media accounts
                                        </p>
                                        <ul class="social-link">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="#" class="facebook"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Explore</h4>
                                <div class="menu-explore-container">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="index.html" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item"><a href="movies-pagination.html">Movies</a></li>


                                        <li class="menu-item"><a href="tv-shows-pagination.html">Tv Shows</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Company</h4>
                                <div class="menu-about-container">
                                    <ul class="menu">
                                        </li>
                                        <li class="menu-item"><a href="contact-us.html">Privacy
                                                Policy</a></li>

                                        <li class="menu-item"><a href="contact-us.html">contact us</a></li>
                                        <li class="menu-item"><a href="pricing-style-1.html">Subscribe</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Downlaod App</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Download Our App And Enjoy accessing all movies and images all at the ease of
                                            your finger tips
                                        </p>
                                        <a href="#">
                                            <img src="{{ asset('images/asset-35.png') }}" alt="playstore"
                                                class="img-fluid" style="max-height: 120px; width: auto;">
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gen-copyright-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <span class="gen-copyright"><a target="_blank" href="#"> Copyright 2021 stremlab
                                    All Rights
                                    Reserved.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
    <!-- footer End -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get all navbar links
            const navLinks = document.querySelectorAll('#gen-main-menu .menu-item a');

            const currentUrl = window.location.href;

            navLinks.forEach(link => {
                if (currentUrl === link.href) {
                    link.parentElement.classList.add('active');
                } else {
                    link.parentElement.classList.remove('active');
                }
            });
        });
    </script>
    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- footer start -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/asyncloader.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/streamlab-core.js"></script>
    <script src="/js/script.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- @stack('scripts') --}}
</body>



<!-- Mirrored from template.gentechtreedesign.com/html/streamlab/red-html/movies-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2024 15:15:29 GMT -->

</html>
