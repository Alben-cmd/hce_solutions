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
                        <li class="current">HCE Trainee Mobility programme: Mat Water, Uganda</li>
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
                            <h3 class="title">Trainees Develop Solar Dryer and Renewable Energy Solutions at Mat Water Uganda</h3>

                            <div class="meta-top">
                                <ul>
                                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Mat Water Training Highlights</a></li>
                                  <!-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">December 10th, 2024</time></a></li> -->
                                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt-fill"></i> <a href="blog-details.html">Uganda</a></li>
                                </ul>
                              </div><!-- End meta top -->
          
                          <div class="content">
                            <p style="text-align:justify;">
                                Trainees placed at <strong>Mat Water Ltd, Uganda</strong>, undertook intensive practical training focused on renewable energy systems, electronics, and innovation-driven solutions.
                            </p>
                            <p style="text-align:justify;">
                                A major achievement during the training was the <strong>successful development of the EcoDry Smart Hybrid Solar Dryer</strong>, alongside hands-on work in electronics and circuit design, embedded systems, and Internet of Things (IoT) applications. The programme also emphasized professional development and industry exposure.
                            </p>
                           
                            <h3>Key training focus areas included:</h3>
                                <ul>
                                    <li>Solar energy system design</li>
                                    <li>Photovoltaic technology</li>
                                    <li>Solar panel fabrication techniques</li>
                                    <li>Renewable energy applications</li>
                                </ul>

                            <p>In addition, trainees were exposed to:</p>
                                <ul>
                                    <li>Local biogas production</li>
                                    <li>Distilled water production and purification</li>
                                    <li>Solar power system design and installation</li>
                                    <li>Renewable energy safety practices</li>
                                </ul>
                            <p><strong>Trainee Reflections:</strong> </p>
                            <div class="testimonial-item mt-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center">
                                        <img src="{{asset('main/assets/img/achievement/mat_training/haruna.jpeg')}}" class="img-fluid rounded-circle mb-3 mb-md-0" alt="Trainee Image" style="width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-9">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p class="mb-0" style="font-size: 1rem; font-style: italic;">
                                                    "The HCE Mobility Training Programme has been truly transformative for me, both personally and professionally. It significantly enhanced my technical capacity and professional development by equipping me with practical, entrepreneurial, industry-relevant skills and a structured approach to problem-solving. Through the training, I improved my ability to apply technical concepts in solving real-world problems, and approach projects with greater analytical depth and human-centeredness. It also strengthened my professionalism, improving my documentation, communication, adaptability, teamwork, and project execution skills, while exposing me to best practices expected in a professional work environment. Overall, the HCE training has given me a fresher perspective and made me more technically confident, and better prepared to contribute to sustainable development in my community, and Africa at large."
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer mt-1">
                                                Fadekemi Zainab Haruna<cite title="Source Title"> - HCE Mobility Programme</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-item mt-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center">
                                        <img src="{{asset('main/assets/img/achievement/mat_training/barnabas.jpg')}}" class="img-fluid rounded-circle mb-3 mb-md-0" alt="Trainee Image" style="width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-9">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p class="mb-0" style="font-size: 1rem; font-style: italic;">
                                                    "Participating in the Homegrown Clean Energy (HCE) Solutions Trainee Mobility Programme has been an incredible journey of growth, hands-on learning, and innovation. The programme gave me the opportunity to work alongside passionate peers and industry professionals across Africa, gaining practical experience in clean energy solutions from design to implementation. Beyond technical skills, it strengthened my problem-solving abilities, entrepreneurial mindset, and understanding of sustainable energy practices tailored to African communities. I am inspired by HCE’s vision of empowering young innovators to develop homegrown solutions that address energy access and climate challenges, and I am proud to be part of this transformative mission."
                                                </p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer mt-1">
                                                Barnabas Olawoore <cite title="Source Title"> - HCE Mobility Programme</cite>
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
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_01.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_02.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_03.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_04.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_05.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_06.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_08.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_09.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_010.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_011.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_012.jpg')}}" class="img-fluid" alt="">
                                                
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