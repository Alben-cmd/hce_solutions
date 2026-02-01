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
                        <li class="current">EcoDry Smart Hybrid Solar Dryer prototype</li>
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
                            <h3 class="title">EcoDry Smart Hybrid Solar Dryer prototype</h3>
                            <div class="meta-top">
                                <ul>
                                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">EcoDry Smart Hybrid Solar Dryer prototype</a></li>
                                  <!-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">December 10th, 2024</time></a></li> -->
                                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt-fill"></i> <a href="blog-details.html">Uganda</a></li>
                                </ul>
                              </div><!-- End meta top -->
          
                          <div class="content">
                            <hr>
                            <p style="text-align:justify;">
                                Trainees placed at <strong>Mat Water Ltd, Uganda</strong> develop a solar dryer and renewable energy solutions at Mat Water Uganda.
                            </p>
                            <p><strong>Overview</strong> </p>
                            <p style="text-align:justify;">
                                The EcoDry Smart Hybrid Solar Dryer is a state-of-the-art, energy-efficient, and user-friendly solar dryer that combines the benefits of traditional dryers with the advantages of solar energy. The dryer features a hybrid design that allows users to choose between manual and automatic modes, depending on their preferences and needs. The dryer is also equipped with a solar panel that converts sunlight into electricity, which is used to heat the water.
                            </p>
                            <p><strong>Problem It Addresses</strong> </p>
                            <p style="text-align:justify;">
                                Traditional crop-drying methods in rural and peri-urban communities are slow, weather-dependent, and expose food to contamination, nutrient loss, and inconsistent moisture levels. Existing systems lack intelligent control to prevent over-drying or under-drying across different crop types.
                            </p>
                            <p><strong>Project Aim</strong></p>
                            <p style="text-align:justify;">
                                To design and develop an affordable, intelligent hybrid solar dryer that delivers consistent, energy-efficient drying performance through automated environmental monitoring and control.
                            </p>
                            <p><strong>Key Features</strong></p>
                            <ul>
                                <li>Hybrid energy system (solar thermal with electric backup)</li>
                                <li>Temperature and humidity sensors for real-time monitoring</li>
                                <li>Automated control of heat and airflow</li>
                                <li>Faster drying with improved product quality</li>
                                <li>Reduced post-harvest losses</li>
                                <li>RFID-based access control to secure electronics and prevent unauthorized use</li>
                            </ul>
                            <p><strong>Current Status</strong></p>
                            <ul>
                                <li>Research & Design: Completed</li>
                                <li>Fabrication & Assembly: Completed</li>
                                <li>Control Algorithm & Firmware: Completed</li>
                                <li>Electronics Integration: In progress</li>
                                <li>Testing & Optimization: Upcoming</li>
                            </ul>
                            <!-- <p><strong>Outcome:</strong></p>
                            <p style="text-align:justify;">
                                A fully functional EcoDry Smart Hybrid Solar Dryer prototype.
                            </p> -->

                            
                            <p><strong>Here are Images Showcasing This Achievement</strong></p>

                            <div class="container">
                                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                                       
                                       
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_04.jpg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_010.jpeg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_012.jpeg')}}" class="img-fluid" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                                            <div class="portfolio-content h-100">
                                                <img src="{{asset('main/assets/img/achievement/mat_training/mat_011.jpg')}}" class="img-fluid" alt="">
                                                
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