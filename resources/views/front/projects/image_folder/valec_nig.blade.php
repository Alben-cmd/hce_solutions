@extends('layouts.master')

@section('title', 'News: HCE')

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
                        <li class="current">HCE Trainee Mobility programme: Valec Nigeria Limited</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
            <div class="container">
                <div class="row">
          
                  <div class="col-lg-12">
          
                    <!-- Blog Details Section -->
                    <div id="blog-details" class="blog-details section">
                      <div class="container">
          
                        <article class="article">
                            <h3 class="title">Clean Energy Training and System Installation at Valec Nigeria Ltd</h3>

                            <div class="meta-top">
                                <ul>
                                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Valec Nig. Ltd Training Highlights</a></li>
                                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt-fill"></i> <a href="blog-details.html">Nigeria</a></li>
                                </ul>
                              </div><!-- End meta top -->
          
                          <div class="content">
                            <p style="text-align:justify;">
                                At <strong>Valec Nigeria Ltd</strong>, trainees engaged in hands-on training focused on clean energy solutions using locally assembled and cost-effective technologies.
                            </p>
                           
                            <h3>Key achievements from the placement included</h3>
                                <ul>
                                    <li>Operation and maintenance of biogas plants</li>
                                    <li>Production of clean distilled water using locally assembled systems</li>
                                    <li>Design and installation of solar power systems</li>
                                    <li>Support for sustainable energy solutions tailored to local needs</li>
                                </ul>

                            <p style="text-align:justify;">
                                The training strengthened participants’ technical competence while reinforcing the importance of affordable, sustainable energy solutions within local contexts.
                            </p>
                            
                            <p><strong>Trainee Reflections</strong> </p>
                            <div class="testimonial-item mt-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center">
                                        <img src="{{asset('main/assets/img/achievement/valec_training/taderera.jpg')}}" class="img-fluid rounded-circle mb-3 mb-md-0" alt="Trainee Image" style="width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-9">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p class="mb-0" style="font-size: 1rem; font-style: italic;">
                                                    "The Homegrown Clean Energy Solutions (HCE) program was a meaningful and transformative experience for me. It challenged me to step out of my comfort zone, adapt to a new environment, and grow both personally and professionally. Through the program, I gained a deeper appreciation of how clean energy solutions are implemented in real communities and how teamwork, discipline, and problem-solving are essential in the energy sector. The experience strengthened my confidence, resilience, and commitment to pursuing a career in clean energy, and it has played an important role in shaping my professional outlook and future ambitions."
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer mt-1">
                                                Taderera Leroy L<cite title="Source Title"> - HCE Mobility Programme</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-item mt-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center">
                                        <img src="{{asset('main/assets/img/achievement/valec_training/jasper.jpg')}}" class="img-fluid rounded-circle mb-3 mb-md-0" alt="Trainee Image" style="width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-9">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p class="mb-0" style="font-size: 1rem; font-style: italic;">
                                                    "The three-month HCE Intra Africa Mobility Training on Home Grown Clean Energy Solutions boosted my skills in biogas technology. I gained hands-on knowledge and Africa-wide connections. Now, I'm training many local farmers on Biogas production, through turning waste into energy and boosting livelihoods with light.Hence cutting energy costs and pushing clean energy access world-wide!.<br>I thank the HCE community especially the selection committee members who selected me for the 3- months training in port Harcourt Nigeria. The trainers for the three months I spent in Nigeria at Valec Electric Limited,thank for you, you invested a lot in me. Lastly I thank God for the good health and wisdom when I was in Nigeria for the training."
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer mt-1">
                                                Twakire Jasper <cite title="Source Title"> - HCE Mobility Programme</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <p><strong>Here are Images Showcasing This Achievements</strong></p>

                            <div class="container">
                                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/valec_training/val_01.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/valec_training/val_02.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/valec_training/val_03.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/valec_training/val_04.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/valec_training/val_05.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div><!-- End Portfolio Container -->

                                </div>
                            </div>
                          </div><!-- End post content -->    
                                
                        </article>
                       
                </div>
              </div>
              
  </main>

  @endsection