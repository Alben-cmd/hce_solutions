@extends('layouts.master')

@section('title', 'News: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/activities.png')}});">
      <div class="container position-relative">
        <h1>Activities</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Activities </li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">
         
          <!-- 4rd post -->
          <div class="col-lg-4"  style="padding-top: 10px">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('main/assets/img/activities/umu_main.jpg')}} " class="img-fluid" alt="">
                <span class="post-date">Uganda Martyrs University</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">UMU Students presentations</h3>

                <!-- <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt"></i> <span class="ps-2">virtual</span>
                    <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-clock"></i> <span class="ps-2">9AM</span>
                  </div>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-hash"></i> <span class="ps-2">RUFtriennial24</span>
                  </div>
                </div> -->

                <p style="text-align:justify;">
                  We are excited to proudly showcase the inspiring presentations by Uganda Martyrs University students, who are championing innovative clean energy solutions and driving meaningful climate action across Africa. Their ideas and projects highlight the power of youth-led initiatives in creating sustainable communities, advancing renewable energy adoption, and addressing the urgent challenges posed by climate change. Through their creativity, research, and passion, these students are shaping a greener and more resilient future for the continent.
                </p>
                <hr>
                <a href="{{ route('activities.umu') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <!-- End 4rd post -->
          

          <!-- 3rd post -->
          <div class="col-lg-4"  style="padding-top: 10px">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('main/assets/img/activities/uoz_main.jpeg')}} " class="img-fluid" alt="">
                <span class="post-date">University of Zimbabwe</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">UOZ Student's Presentation</h3>

                <div class="meta d-flex align-items-center">
                  <!-- <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt"></i> <span class="ps-2">virtual</span>
                    <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-clock"></i> <span class="ps-2">9AM</span>
                  </div>
                  </div> -->
                  <!-- <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-hash"></i> <span class="ps-2">RUFtriennial24</span>
                  </div> -->
                </div>

                <p style="text-align:justify;">
                  We are thrilled to highlight the remarkable presentations by University of Zimbabwe students as they showcase their commitment to advancing clean energy solutions and driving climate action across Africa. Their innovative ideas reflect a deep understanding of the environmental challenges facing the continent and a strong determination to create lasting change. By promoting sustainable practices and renewable energy initiatives, these young changemakers are inspiring a new generation of leaders dedicated to building a greener, healthier, and more resilient future for all.
                </p>
                <hr>
                <a href="{{ route('activities.uoz') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
         
          
        </div>
      </div>

    </section><!-- /Blog Posts Section -->
  </main>

  @endsection