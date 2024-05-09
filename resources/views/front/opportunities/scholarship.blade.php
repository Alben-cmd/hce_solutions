@extends('layouts.master')

@section('title', 'Scholarship: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/page-title-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Opportunities</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Scholarship</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <br>
                  <h2>Scholarships</h2>
                  <p><strong>Shape Africa's clean energy future with a world-class scholarship! </strong>This program connects you with prestigious universities offering a range of exceptional degrees. Master cutting-edge technologies and groundbreaking strategies to build a sustainable future.</p>
                  <br>
                  <a href="#"><button type="button" class="btn btn-outline-success"><em>Get Started</em></button></a>
                </div><!-- End Section Title -->
          
                <div class="container">          
                    
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                            <i class="fa-solid fa-people-group"></i>
                            </div>

                            <h3>Become a Clean Energy Leader:</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Makerere University, Uganda: Master cutting-edge technologies in Master of Science in Renewable Energy. Gain expertise in Bio-Energy, Hydropower, Solar Energy, Wind Energy, and more.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>University of Nigeria, Nsukka: Choose your path: Master's and PhD in Environmental Management and Control, Master in Renewable Energy, PhD and Masters in Artificial Intelligence, or PhD and Masters Degree in Climate Change Economics, Policy and Innovation.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Federal University of Technology Minna, Nigeria: Pursue an MSc in Agriculture and Bioresource Engineering or a PhD in Climate Change and Human Habitat.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Uganda Martyrs University: Master the art of agroecology and food systems with a PhD and Master's Degree in Agroecology and Food Systems.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>University of Zimbabwe: Become an expert in MSc in Climate Science and Climate System Modelling, Master of Science Degree in Climate Change and Food Systems, or Master of Science Degree in Agricultural Informatics and Data Analytics.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>University of Abomey-Calavi, Benin: Pursue a Complementary Master and PhD in Electrical Engineering and Energetic Engineering, Renewable Energies and Energy Systems (ERSE).</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                              <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <h3>This scholarship program empowers you to:</h3>
                            <div class="features section">

                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Earn a prestigious degree from a leading university.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Develop in-demand skills for a thriving clean energy sector.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Become a changemaker, driving innovation and sustainability in Africa.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Contribute to a brighter future for generations to come.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <br>
                    <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <!-- <h2>Services</h2> -->
            <p> <em> <strong>Don't miss out! Apply today and unlock your potential to lead Africa's clean energy transformation!</strong></em></p>
            <br>
            <a href="#"><button type="button" class="btn btn-outline-success"><em>Get Started</em></button></a><br><br>
          </div><!-- End Section Title -->
                </div>
          
            </section>
  </main>

  @endsection