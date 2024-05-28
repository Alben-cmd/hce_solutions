@extends('layouts.master')

@section('title', 'Impacts: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/project-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Project Impacts</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Project Impacts</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
                    <br>
                  <h2>Project Impact</h2>
                  <p>This project aims to promote clean energy solutions and climate action in Africa. Here's how different target groups will benefit:</p>
                </div><!-- End Section Title -->
          
                <div class="container">          
                    
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                            <i class="fa-solid fa-people-group"></i>
                            </div>
                            <h3>Individuals</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Students & Trainees: </strong>Gain knowledge and skills in clean energy for future careers. Improved employability through specialized training and practical applications. Broadened perspective and cross-cultural understanding through international mobility programs.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Staff Members:</strong> Enhanced expertise in clean energy and climate science through training and collaboration with international partners. Opportunities for career advancement and participation in innovative teaching methods.</span></li>
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
                            <h3>Institutions</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>To promote the development of Homegrown Clean Energy (HCE) solutions to make them available for the underrepresented. </span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>To facilitate knowledge sharing and technology transfer amongst participating institutions and raise awareness on climate change-driven clean energy solutions.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>To enhance entrepreneurship skills development on clean energy solutions for climate change adaptation and mitigation in Africa. </span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>To promote gender equality and social-just climate inclusion on clean energy solutions for adaptation and mitigation in Africa.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-building-shield"></i>
                            </div>
                            <h3>Policymakers & Government Officials</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Access to research findings, policy recommendations, and best practices for formulating effective clean energy and climate change policies.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Deeper understanding of the socio-economic benefits of clean energy solutions to support policy development.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Enhanced capacity to design and implement climate change strategies for national and regional sustainable development.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-satellite"></i>
                            </div>
                            <h3>Wider Community</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Improved livelihoods and reduced energy poverty through increased access to clean energy solutions.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Increased resilience to climate change impacts through sustainable energy practices.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Raised awareness and empowered communities to participate in clean energy initiatives.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Socio-economic benefits through job creation, entrepreneurship opportunities, and local clean energy industries.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-solar-panel"></i>
                            </div>
                            <h3>Energy Companies & Local Authorities</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>The project integrates with energy companies and local authorities into the project through trainee placement schemes to be trained on the use of homegrown technologies to generate electricity.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-calculator"></i>
                            </div>
                            <h3>Multiplier Effects</h3>
                            <p>The project's success will be documented and shared for wider benefits:</p>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Replication: </strong>Effective strategies and approaches can be replicated in other regions.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Knowledge Sharing: </strong>Best practices, lessons learned, and technical expertise will be shared through workshops, publications, and online platforms.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Capacity Building: </strong>Enhanced skills and knowledge of participants will contribute to the clean energy and climate change sectors. </span></li>
                                        <li><i class="bi bi-check2-all"></i> <span><strong>Networking: </strong>Collaboration and information sharing will be fostered among participants beyond the project's lifespan.</span></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End Service Item -->
                    <br>
                </div>
          
            </section>
  </main>

  @endsection