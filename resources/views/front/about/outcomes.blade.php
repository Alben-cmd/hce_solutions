@extends('layouts.master')

@section('title', 'Outcomes: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/page-title-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Expected Outcomes</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Expected Outcomes</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
      <br>
    <h2>Expected Outcomes</h2>
    <p><em>The Homegrown Clean Energy Solutions Project is a groundbreaking initiative empowering Africa to tackle climate change and achieve energy independence. Here's how we envision a brighter future:</em></p>
  </div><!-- End Section Title -->   
    <section id="features-cards" class="features-cards section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Building the Next Generation of Clean Energy Experts:</h3>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span><strong>Scholarship Program:</strong> Talented students from partner institutions will gain invaluable expertise through knowledge exchange and co-production in clean energy solutions.</span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Cross-Pollination of Skills:</strong> Leading universities like UAC and FUTMIN will share their knowledge in renewable energy, entrepreneurship, and digital technologies with agricultural universities like UMU and Makerere.</span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Expanded Skillset:</strong> Students will gain practical skills in emission reduction, forestry, climate science, and food systems at universities like UNN and UZ.</span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <h3>Fostering Stronger Regional Collaboration:</h3>

            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span><strong>Mobility Programs:</strong> Student, trainee, and staff exchanges will create a synergy of knowledge and expertise between participating institutions.</span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Joint Curricula Development:</strong> Universities will work together to develop regionally-tailored curricula that leverage collective strengths.</span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Knowledge-Sharing Network:</strong> A platform will be established to facilitate the continent-wide exchange of best practices.</span></li>
            </ul>
          </div><!-- End feature item-->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <h3>Driving Sustainable Economic Growth and Green Jobs:</h3>
            
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Developed clean energy technologies will create new opportunities in manufacturing, installation, maintenance, and service sectors, fostering <strong>economic development.</strong></span></li>
              <li><i class="bi bi-check2"></i> <span>Focused training programs and private sector collaboration will equip graduates with the skills to become successful <strong>clean energy entrepreneurs.</strong></span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Investment Magnet</strong></span></li>
            </ul>
          </div><!-- End feature item-->

        

        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Building Partnerships for Long-Term Impact:</h3>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span><strong>Private Sector Collaboration</strong></span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Continental Commitment</strong></span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <h3>Empowering Local Innovation and Knowledge Retention:</h3>

            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Interactive outreach programs will spark early interest and <strong>ignite innovation</strong> in clean energy among primary and high school students… <strong>Catching Them Young</strong></span></li>
              <li><i class="bi bi-check2"></i> <span>Local communities will be equipped to develop <strong>context-specific solutions</strong> that address their unique challenges...<strong>Community-Driven Solutions</strong></span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <h3>Building Resilience for a Sustainable Future:</h3>
            
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span><strong>Reduced Emissions</strong> </span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Natural Resource Conservation</strong> </span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Decentralized Energy Systems</strong></span></li>
            </ul>
          </div><!-- End feature item-->

        

        </div>
        
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Investing in the Future:</h3>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Educators will be trained to integrate <strong>clean energy entrepreneurship</strong> into their curriculum… <strong>Entrepreneurial Mindset</strong></span></li>
              <li><i class="bi bi-check2"></i> <span>Students will gain hands-on experience through practical outreach programs… <strong>Practical Learning</strong></span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Entrepreneurship Assessment</strong></span></li>
            </ul>
          </div><!-- End feature item-->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <h3>Building a Sustainable Future, Together:</h3>

            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Partner institutions will offer 3-month <strong>micro-certification courses</strong> in clean energy solutions.</span></li>
              <li><i class="bi bi-check2"></i> <span>Revised curricula will increase student engagement and understanding of clean energy technologies and their role in climate change and entrepreneurship.</span></li>
              
            </ul>
          </div><!-- End feature item-->
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <h3>Increased Gender Equality and Social Inclusion:</h3>
            
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span><strong>Focus on Women… </strong>The project will ensure <strong>40% female participation </strong>at all levels, from selection to training and leadership </span></li>
              <li><i class="bi bi-check2"></i> <span><strong>Social Justice Focus:</strong> 20% of project opportunities will be reserved for people with disabilities, addressing the needs of marginalized and vulnerable groups. </span></li>
             
            </ul>
          </div><!-- End feature item-->

        

        </div>

      </div>

    </section>

    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title2" data-aos="fade-up">
          <!-- <h2>Services</h2> -->
          <p> <em> <strong>By achieving these outcomes, the Homegrown Clean Energy Solutions Project will empower Africa to create a sustainable future powered by clean energy, innovation, and opportunity. Join us in making it a reality!</strong></em></p>
        </div><!-- End Section Title -->
  
  
      </section>

  </main>

  @endsection