@extends('layouts.master')

@section('title', 'Capacity Development: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/about-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Capacity Development</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Capacity Development</li>
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
                  <h2>Capacity Development and Knowledge Transfer</h2>
                  <p>The Homegrown Clean Energy Solutions Project is committed to empowering individuals and institutions across Africa to become leaders in clean energy innovation. Through a robust capacity development and knowledge transfer program, we equip participants with the skills, resources, and connections needed to drive a sustainable clean energy future.</p>
                </div><!-- End Section Title -->
          
                <div class="container">          
                    
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            
                            <h3>Here's how we're fostering a vibrant learning ecosystem:</h3>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Training programs</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Workshops</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Mentoring Activities</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Sharing of Best Practices</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Lesson Learned</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Research Findings among Project Stakeholders and Other Interested parties
                                        </span></li>
                                    </ul>
                                </div>
                            </div>

                            <h5>By participating in our capacity development and knowledge transfer initiatives, you'll gain the expertise, connections, and resources needed to:</h5>
                            <div class="features section">
                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> <span>Advance your clean energy career.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Develop innovative clean energy solutions.</span></li>
                                        <li><i class="bi bi-check2-all"></i> <span>Contribute to a more sustainable future for Africa.</span></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            

                        </div>
                    </div><!-- End Service Item -->
             
                    <br>
                    <div class="container section-title2" data-aos="fade-up">
            
                        <p> <em> <strong>Join us in building a brighter tomorrow. Explore our upcoming programs and events, or contact us to learn more about how you can get involved!</strong></em></p>
                    </div><!-- End Section Title -->
              

                </div>
          
            </section>
  </main>

  @endsection