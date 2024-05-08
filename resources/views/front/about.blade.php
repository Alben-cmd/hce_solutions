@extends('layouts.master')

@section('title', 'About: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/page-title-bg.jpg')}});">
      <div class="container position-relative">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">About HCE</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
    <section id="alt-services" class="alt-services section">
        <div class="container section-title" data-aos="fade-up">
            <!-- <h2>Services</h2> -->
            <p> <em> <strong>Homegrown Clean Energy Solutions isn't just about technology; it's about people. By harnessing African talent and creativity, we can transform the continent's energy landscape. Imagine the ripple effect: reduced poverty, improved health, and a more resilient environment.</strong></em></p><br>
          </div><!-- End Section Title -->
      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="main/assets/img/alt-services.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>A Homegrown Solution to Climate Change</h3>
            <p>Africa, a continent brimming with potential, faces a critical challenge: ensuring energy access and tackling climate change. Over 50% of its population lacks electricity, relying on unsustainable practices that threaten their health and the environment. Yet, Africa possesses a wealth of untapped renewable resources – a golden key to unlocking a brighter future.</p>
            <p>This is where the Homegrown Clean Energy (HCE) Solutions Project steps in. We envision a revolution driven not by external solutions, but by African ingenuity. We'll empower universities, private sectors, and local communities to develop clean energy solutions tailored to their specific needs.</p>

            <h5>Imagine a future where:</h5>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
                <p>Remote villages are illuminated by locally-produced solar power, freeing women from the drudgery of collecting firewood.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                <p>Farmers utilize renewable irrigation systems, ensuring food security even amidst changing weather patterns.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <!-- <h4><a href="" class="stretched-link">Dine Pad</a></h4> -->
                <p>Young Africans become green energy entrepreneurs, creating jobs and fostering a sustainable future.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>
        </div>

      </div>

    </section><!-- /Alt Services Section -->

    <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h4>This isn't just a dream; it's a concrete plan. Our project tackles the challenges head-on:</h4>
            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Building Capacity</h4>
                  <p>We'll equip universities with the resources to train a new generation of clean energy experts.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Fostering Innovation</h4>
                  <p>By promoting knowledge exchange and research collaborations, we'll unlock Africa's potential for homegrown solutions.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Empowering Communities</h4>
                  <p>We'll prioritize gender equality and social inclusion, ensuring everyone benefits from clean energy access.</p>
                </div>
              </div><!-- End Icon Box -->
            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="main/assets/img/features-3-2.jpg" alt="">
          </div>

        </div>

      </div>

    </section><!-- /Alt Services 2 Section -->
    <div class="features section"> 
        <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            
              <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h4><strong>Our specific objectives?</strong></h4>
                    
                <ul>
                    <li><i class="bi bi-check2-all"></i> <span>To promote the development of Homegrown Clean Energy (HCE) solutions to make them available for the underrepresented. </span></li>
                    <li><i class="bi bi-check2-all"></i> <span>To facilitate knowledge sharing and technology transfer amongst participating institutions and raise awareness on climate change-driven clean energy solutions.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>To enhance entrepreneurship skills development on clean energy solutions for climate change adaptation and mitigation in Africa. </span></li>
                    <li><i class="bi bi-check2-all"></i> <span>To promote gender equality and social-just climate inclusion on clean energy solutions for adaptation and mitigation in Africa.</span></li>
                </ul>
              </div>  
                    
          </div><!-- End tab content item -->
          
        </div>
        
        </div>
    </div>
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <!-- <h2>Services</h2> -->
          <p> <em> <strong>Join us in this groundbreaking initiative. Together, let's power Africa's future with homegrown clean energy solutions!</strong></em></p>
        </div><!-- End Section Title -->
  
  
      </section>

  </main>

  @endsection