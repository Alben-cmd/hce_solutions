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
            <li class="current">Project Achievements</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
            

            <section id="blog-posts" class="blog-posts section">

              <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
                <br>
              <h2>Achievements</h2>
              <p>Here are images showcasing our achievements and the places we've visited to promote clean energy solutions and climate action in Africa.</p>
            </div><!-- End Section Title -->

              <div class="container">
                <div class="row gy-4">

                  <!-- 6th post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/mat_010.jpeg')}} " class="img-fluid" alt="">
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">EcoDry Smart Hybrid Solar Dryer prototype</h3>
        
                        <a href="{{ route('EcoDry') }} " class="readmore stretched-link">View<i class="bi bi-arrow-right"></i></a>
        
                      </div>
                      
        
                    </article>
                  </div>
                  <!-- End 6th post -->

                  <!-- 5th post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/mat_training/mat_05.jpg')}} " class="img-fluid" alt="">
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">HCE Trainee Mobility programme: Mat Water, Uganda</h3>
        
                        <a href="{{ route('mat_water') }} " class="readmore stretched-link">View<i class="bi bi-arrow-right"></i></a>
        
                      </div>
                      
        
                    </article>
                  </div>
                  <!-- End 5th post -->
                  <!-- 4th post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/valec_training/val_02.jpg')}} " class="img-fluid" alt="">
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">HCE Trainee Mobility programme: Valec Nig Ltd</h3>
        
                        <a href="{{ route('valec_nig') }} " class="readmore stretched-link">View<i class="bi bi-arrow-right"></i></a>
        
                      </div>
                      
        
                    </article>
                  </div>
                  <!-- End 4th post -->
                  <!-- First post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/brussels_01.jpg')}} " class="img-fluid" alt="">
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">Meeting at Brussels March 2024</h3>
        
                        <a href="{{ route('brussels') }} " class="readmore stretched-link">View<i class="bi bi-arrow-right"></i></a>
        
                      </div>
                      
        
                    </article>
                  </div>
                  <!-- End first post -->
                  <!-- Second post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/futminna/futminna01.jpg')}} " class="img-fluid" alt="">
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">Meet Our HCE Scholars at Federal University of Technology Minna, Nigeria</h3>

                        <a href="{{ route('futminna') }}" class="readmore stretched-link"><span>View</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                    </article>
                  </div>
                  <!-- End second post -->
        
                  <!-- 3rd post -->
                  <div class="col-lg-4"  style="padding-top: 10px">
                    <article class="position-relative h-100">
        
                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('main/assets/img/achievement/abomey_calavi/abomey_calavi01.jpg')}} " class="img-fluid" alt="">
                        <!-- <span class="post-date">December 10th, 2024</span> -->
                      </div>
        
                      <div class="post-content d-flex flex-column">
        
                        <h3 class="post-title">Meet Our HCE Scholars at University of Abomey-Calavi (UAC), Benin, Benin</h3>
                        <a href="{{ route('abomey_calavi') }}" class="readmore stretched-link"><span>View</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                    </article>
                  </div>
                  <!-- End 3rd post --> 
                </div>
              </div>
        
            </section>
  </main>

  @endsection