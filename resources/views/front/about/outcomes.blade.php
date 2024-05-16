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
    <section id="services" class="services section" style="padding-top: 20px">
      <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
        <br>
        <h2>Expected Outcomes</h2>
        <p><em>The Homegrown Clean Energy Solutions Project is a groundbreaking initiative empowering Africa to tackle climate change and achieve energy independence. Here's how we envision a brighter future:</em></p>
      </div>
    </section>
    <style type="text/css">
      body{margin-top:10px;}
      .section_padding_130 {
          padding-top: 5px;
          padding-bottom: 130px;
      }
      .faq_area {
          position: relative;
          z-index: 1;
          background-color: #f5f5ff;
      }
      .faq-accordian {
          position: relative;
          z-index: 1;
      }
      .faq-accordian .card {
          position: relative;
          z-index: 1;
          margin-bottom: 1.5rem;
      }
      .faq-accordian .card:last-child {
          margin-bottom: 0;
      }
      .faq-accordian .card .card-header {
          background-color: #ffffff;
          padding: 0;
          border-bottom-color: #ebebeb;
      }
      .faq-accordian .card .card-header h6 {
          cursor: pointer;
          padding: 1.75rem 2rem;
          color: #adf802;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -ms-grid-row-align: center;
          align-items: center;
          -webkit-box-pack: justify;
          -ms-flex-pack: justify;
          justify-content: space-between;
      }
      .faq-accordian .card .card-header h6 span {
          font-size: 1.5rem;
      }
      .faq-accordian .card .card-header h6.collapsed {
          color: #52565e;
      }
      .faq-accordian .card .card-header h6.collapsed span {
          -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
      }
      .faq-accordian .card .card-body {
          padding: 1.75rem 2rem;
      }
      .faq-accordian .card .card-body p:last-child {
          margin-bottom: 0;
      }
      
      @media only screen and (max-width: 575px) {
          .support-button p {
              font-size: 14px;
          }
      }
      
      .support-button i {
          color: #adf802;
          font-size: 1.25rem;
      }
      @media only screen and (max-width: 575px) {
          .support-button i {
              font-size: 1rem;
          }
      }
      
      .support-button a {
          text-transform: capitalize;
          color: #adf802;
      }
      @media only screen and (max-width: 575px) {
          .support-button a {
              font-size: 13px;
          }
      }
    </style>
    <body>
      <div class="faq_area section_padding_130" id="faq">
        <div class="container">
          <div class="">
            <div class="accordion faq-accordian" id="faqAccordion">
              <div class="row justify-content-center">
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingOne">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  data-aos="fade-up">Building the Next Generation of Clean Energy Experts<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p><strong>Scholarship Program:</strong> Talented students from partner institutions will gain invaluable expertise through knowledge exchange and co-production in clean energy solutions.</p>
                        <p><strong>Cross-Pollination of Skills:</strong> Leading universities like UAC and FUTMIN will share their knowledge in renewable energy, entrepreneurship, and digital technologies with agricultural universities like UMU and Makerere.</p>
                        <p><strong>Expanded Skillset: </strong>Students will gain practical skills in emission reduction, forestry, climate science, and food systems at universities like UNN and UZ.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingTwo">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"  data-aos="fade-up">Fostering Stronger Regional Collaboration<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p><strong>Mobility Programs: </strong>Student, trainee, and staff exchanges will create a synergy of knowledge and expertise between participating institutions.</p>
                        <p><strong>Joint Curricula Development: </strong>Universities will work together to develop regionally-tailored curricula that leverage collective strengths.</p>
                        <p><strong>Knowledge-Sharing Network: </strong>A platform will be established to facilitate the continent-wide exchange of best practices.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingThree">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"  data-aos="fade-up">Driving Sustainable Economic Growth and Green Jobs<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Developed clean energy technologies will create new opportunities in manufacturing, installation, maintenance, and service sectors, fostering <strong>economic development.</strong></p>
                        <p>Focused training programs and private sector collaboration will equip graduates with the skills to become successful clean <strong>energy entrepreneurs</strong></p>
                        <p>Investment Magnet</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingFour">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"  data-aos="fade-up">Building Partnerships for Long-Term Impact<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Private Sector Collaboration</p>
                        <p>Continental Commitment</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingFive">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"  data-aos="fade-up">Empowering Local Innovation and Knowledge Retention<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Interactive outreach programs will spark early interest and <strong>ignite innovation</strong> in clean energy among primary and high school students… <strong>Catching Them Young</strong></p>
                        <p>Local communities will be equipped to develop <strong>context-specific solutions </strong>that address their unique challenges...<strong>Community-Driven Solutions</strong></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingSix">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"  data-aos="fade-up">Building Resilience for a Sustainable Future<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Reduced Emissions</p>
                        <p>Natural Resource Conservation</p>
                        <p>Decentralized Energy Systems </p>
                    
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingz">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsez" aria-expanded="true" aria-controls="collapsez"  data-aos="fade-up">Investing in the Future<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapsez" aria-labelledby="headingz" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Educators will be trained to integrate <strong>clean energy entrepreneurship </strong>into their curriculum… <strong>Entrepreneurial Mindset</strong></p>
                        <p>Students will gain hands-on experience through practical outreach programs… <strong>Practical Learning</strong></p>
                        <p>Entrepreneurship Assessment</p>
                    
                      </div>
                    </div>
                  </div>
                </div>        
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-header" id="headingy">
                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsey" aria-expanded="true" aria-controls="collapsey"  data-aos="fade-up">Building a Sustainable Future Together<span class="lni-chevron-up"></span></h6>
                    </div>
                    <div class="collapse" id="collapsey" aria-labelledby="headingy" data-parent="#faqAccordion">
                      <div class="card-body">
                        <p>Partner institutions will offer 3-month <strong>micro-certification courses </strong>in clean energy solutions.</p>
                        <p>Revised curricula will increase student engagement and understanding of clean energy technologies and their role in climate change and entrepreneurship.</p>
                      </div>
                    </div>
                  </div>
                </div>      
                <div class="col-6 pb-4">
                  <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <div class="card-header" id="headingx">
                    <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsex" aria-expanded="true" aria-controls="collapsex"  data-aos="fade-up">Increased Gender Equality and Social Inclusion<span class="lni-chevron-up"></span></h6>
                  </div>
                  <div class="collapse" id="collapsex" aria-labelledby="headingx" data-parent="#faqAccordion">
                    <div class="card-body">
                      <p><strong>Focus on Women… </strong>The project will ensure <strong>40% female participation </strong>at all levels, from selection to training and leadership</p>
                      <p>Revised curricula will increase student engagement and understanding of clean energy technologies and their role in climate change and entrepreneurship.</p>
                    </div>
                  </div>
                </div>
                </div>        
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title2" data-aos="fade-up">
          <!-- <h2>Services</h2> -->
          <p> <em> <strong>By achieving these outcomes, the Homegrown Clean Energy Solutions Project will empower Africa to create a sustainable future powered by clean energy, innovation, and opportunity. Join us in making it a reality!</strong></em></p>
        </div><!-- End Section Title -->
  
  
      </section>

      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        
      </script>
    </body>

  </main>

@endsection