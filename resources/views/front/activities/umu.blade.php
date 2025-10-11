@extends('layouts.master')

@section('title', 'Archievements: HCE')

@section('content')

    <main class="main">

        <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/activities.png')}});">
      <div class="container position-relative">
        <h1>UMU Students presentations</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li><a href=" {{ route('activities') }} ">Activities </a></li>
            <li class="current">UMU Students presentations</li>
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
            <h2>Uganda Martyrs University</h2>
            <p>Here are clips of the UMU Students presentations in promoting clean energy solutions and climate action in Africa.</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($images as $image)

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ $image }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>2024</h4> --}}
                                    <p>UMU Students presentations</p>
                                    <a href="{{ $image }}" title="UMU Students presentations" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        @endforeach

                        
                    </div><!-- End Portfolio Container -->

                </div>
            </div>

        </section>
    </main>

@endsection