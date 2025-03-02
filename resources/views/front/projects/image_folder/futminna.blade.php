@extends('layouts.master')

@section('title', 'Archievements: HCE')

@section('content')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/project-bg.jpg')}});">
            <div class="container position-relative">
                <h1>Project Achievements</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href=" {{ route('home') }} ">Home</a></li>
                        <li><a href=" {{ route('achievements') }} ">Project Achievements</a></li>
                        <li class="current">FUT Minna Students</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Alt Services Section -->
        <!-- Section Title -->
        <section id="projects" class="projects section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
                <br>
            <h2>Achievements</h2>
            <p>Here are images showcasing our achievements and the places we've visited to promote clean energy solutions and climate action in Africa.</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna01.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna01.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna02.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna01.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna03.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna03.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna04.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna04.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna05.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna05.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('main/assets/img/achievement/futminna/futminna06.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>HCE Scholars at FUT Minna, Nigeria</p>
                                    <a href="{{asset('main/assets/img/achievement/futminna/futminna06.jpg')}}" title="HCE Scholars at FUT Minna, Nigeria" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    </div><!-- End Portfolio Container -->

                </div>
            </div>

        </section>
    </main>

@endsection