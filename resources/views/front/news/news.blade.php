@extends('layouts.master')

@section('title', 'News: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/news-bg.jpg')}});">
      <div class="container position-relative">
        <h1>News</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">News</li>
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
          <!-- First post -->
          <div class="col-lg-4"  style="padding-top: 10px">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('main/assets/img/blog/news1.jpg')}} " class="img-fluid" alt="">
                <span class="post-date">12 - 16 August 2024</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">The 2nd Ruforum Triennial Conference</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt"></i> <span class="ps-2">Windhoek, Namibia</span>
                  </div>
                  <!-- <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-hash"></i> <span class="ps-2">RUFtriennial24</span>
                  </div> -->
                </div>

                <p style="text-align:justify;">
                  <strong>Operationalising Higher Agricultural Education and Research Ecosystems for Innovation, Industrialisation and Economic Development in Africa: A Call for Action;</strong> The 2nd RUFORUM Triennial Conference will gather stakeholders like policymakers and academics to discuss key agricultural and economic issues in Africa.
                </p>

                <hr>

                <a href="https://www.ruforum.org/Triennial2024/" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>
              

            </article>
          </div><!-- End first post -->
          <!-- Second post -->
          <div class="col-lg-4"  style="padding-top: 10px">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('main/assets/img/blog/admission.jpg')}} " class="img-fluid" alt="">
                <span class="post-date">2024 Admissions</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">HCE Intra-Africa Mobility Masters and PhD Scholarship Awardees</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <!-- <i class="bi bi-geo-alt"></i> <span class="ps-2">MSc & PhD</span> -->
                  </div>
                  <!-- <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-hash"></i> <span class="ps-2">RUFtriennial24</span>
                  </div> -->
                </div>

                <p style="text-align:justify;">
                  We are thrilled to highlight the exceptional recipients of the prestigious HCE Intra-Africa Mobility masters and PhD scholarships. These highly competitive programs provide life-changing educational opportunities for the most promising students across the African continent.
                </p>
                <hr>
                <a href="{{ route('scholarshipAwardees') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <!-- End second post -->

          
        </div>
      </div>

    </section><!-- /Blog Posts Section -->
  </main>

  @endsection