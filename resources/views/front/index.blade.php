@extends('layouts.master')

@section('title', 'HCE - Home')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-10 text-center">
              <h2 class="">Homegrown Clean Energy Solutions</h2>
              <!-- <p>A groundbreaking initiative igniting Africa's clean energy future. We believe the key to Africa's energy independence and environmental well-being lies within its people. That's why we're fostering a powerful movement built on collaboration, innovation, and homegrown ingenuity</p> -->
              <div>
              <p class="px-3">An initiative in Africa is focusing on clean energy to promote energy independence and environmental well-being through collaboration and innovation.</p>
              </div>
              <!-- <a href="#get-started" class="btn-get-started">Get Started</a> -->
            </div>
          </div>
        </div>
      </div>

      <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="{{ asset('main/assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
        </div>

        <div class="carousel-item active">
          <img src="{{ asset('main/assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('main/assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('main/assets/img/hero-carousel/hero-carousel-4.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('main/assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
        </div>

        <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->

    <!-- Why choose us Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" style="padding-top: 27px">
          <h2>Why Choose Us</h2>
          <!-- <p>Here's why you can expect exceptional results from us...</p> -->
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3>Empowering Local Expertise</h3>
                <p style="text-align:justify;">We equip universities, private sectors, and communities to develop clean energy solutions tailored to their specific needs. No one-size-fits-all approaches here – we cultivate African-led solutions for <strong>Africa's challenges.</strong></p>
                <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> -->
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                </div>
                <h3>Building the Next Generation</h3>
                <p style="text-align:justify;">We're not just training students – we're creating the next wave of clean energy <strong>experts and entrepreneurs.</strong> Our comprehensive programs equip participants with the knowledge and skills to drive innovation and economic growth.</p>
                <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> -->
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-hand-fist"></i>
                </div>
                <h3>Strength in Collaboration</h3>
                <p style="text-align:justify;">We foster partnerships between universities, private companies, and communities. This synergy fuels knowledge sharing, accelerates progress, and creates a <strong>lasting impact </strong>across Africa.</p>
                <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> -->
              </div>
            </div><!-- End Service Item -->
          </div>
  
        </div>
  
    </section><!-- /Services Section -->
      <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">

        <div class="container">
  
          <div class="row justify-content-around gy-4">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Join the Movement</h3>
              <p>Explore our website to learn more about our initiatives, partnerships, and upcoming events. Here are some key areas you can delve into:</p>
  
              
                <div class="icon-box d-flex">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4>Capacity Building & Knowledge Transfer</h4>
                    <p>Discover our programs empowering individuals and institutions to become clean energy leaders.</p>
                  </div>
                </div><!-- End Icon Box -->
            </div>
            
  
            <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('main/assets/img/features-3-2.jpg')}}" alt="">
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Alt Services 2 Section -->
      <div class="features section"> 
        <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            
              <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4><strong>Meet the Esteemed Universities, Private Companies, and Organizations Collaborating to Make Clean Energy a Reality:</strong></h4>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>University of Abomey-Calavi (UAC), Benin</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Makerere University (MU), Uganda</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>University of Zimbabwe (UZ), Zimbabwe</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>West African Science Service Centre on Climate Change and Adapted Land Use (WASCAL)</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Nigerian Women in Agricultural Research for Development (NiWARD), Nigeria</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Instituto Politecnico Do Porto, Portugal</span></li>
                          </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Uganda Martyrs University (UMU), Uganda</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>University of Nigeria, Nsukka (UNN), Nigeria</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>VALEC ELECTRIC LIMITED, Nigeria</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Regional Universities Forum for Capacity Building in Agriculture (RUFORUM)</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>West African Science Services Centre, Ghana</span></li>
                          </ul>
                    </div>
                </div>
                
              </div>                
          </div><!-- End tab content item -->
        </div>

        </div>
    </div>

      <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>News & Events</h2>
          <p>Stay updated on our latest developments, upcoming workshops, and exciting opportunities to get involved. </p>
          <br>
          <p><em><strong>Together, let's ignite a clean energy revolution that empowers Africa to build a brighter, more sustainable future!</strong></em></p><br>
          <a href="#"><button type="button" class="btn btn-outline-success"><em>Get Involved</em></button></a><br><br>
          <p>Explore partnership opportunities, volunteer your expertise, or simply spread the word!</p>
        </div><!-- End Section Title -->

      </section><!-- /Services Section -->
  

    <!-- Get Started Section -->
     
  </main>
  @endsection