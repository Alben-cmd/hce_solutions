@extends('layouts.master')

@section('title', 'Scholarship: HCE')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/page-title-bg.jpg')}});">
        <div class="container position-relative">
          <h1>FAQ</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href=" {{ route('home') }} ">Home</a></li>
              <li class="current">FAQ</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
      <section id="services" class="services section" style="padding-top: 20px">
      <div class="container section-title" data-aos="fade-up">
        <br>
      <h2>Frequenty Asked Questions</h2>
    </div>
  </section>
      <style type="text/css">
      body{margin-top:10px;}
      .section_padding_130 {
          padding-top: 3px;
          padding-bottom: 15px;
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
            <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
            <div class="accordion faq-accordian" id="faqAccordion">
            <h5>General</h5>
            <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="card-header" id="headingOne">
            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  data-aos="fade-up">What is the Homegrown Clean Energy Solutions Project?<span class="lni-chevron-up"></span></h6>
            </div>
            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
            <div class="card-body">
            <p>The Homegrown Clean Energy Solutions Project is a groundbreaking initiative empowering Africa to tackle climate change and achieve energy independence. </p>
            <p>We focus on building capacity, fostering regional collaboration, and promoting knowledge retention for local innovation in clean energy solutions.</p>
            </div>
            </div>
            </div>
            <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="card-header" id="headingTwo">
            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"  data-aos="fade-up">Who is coordinating the project?<span class="lni-chevron-up"></span></h6>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
            <div class="card-body">
            <p>The project is proudly coordinated by the Federal University of Technology Minna (FUTMIN), Nigeria, a leader in clean energy research and development.</p>
            </div>
            </div>
            </div>
            <h5>Scholarships</h5>
            <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="card-header" id="headingThree">
            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"  data-aos="fade-up">Who can apply for scholarships?<span class="lni-chevron-up"></span></h6>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
            <div class="card-body">
            <p>Scholarship eligibility criteria will vary depending on the specific program offered by each partner university.</p>
            <p>Generally, scholarships are targeted towards talented graduate students from participating universities in Africa.</p>
            </div>
            </div>
            </div>
            <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <div class="card-header" id="headingFour">
              <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"  data-aos="fade-up">Where can I find information on the specific scholarship programs?<span class="lni-chevron-up"></span></h6>
              </div>
              <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqAccordion">
              <div class="card-body">
              <p>
                Please visit the "Partners" page on our website to find contact information for each partner university.</p>
                <p>You can then visit their website or reach out directly for details on their scholarship programs related to the Homegrown Clean Energy Solutions Project.
              </p>
              </div>
              </div>
              </div>
              <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="card-header" id="headingFive">
                <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"  data-aos="fade-up">What are the generic conditions and components of the scholarships offered?<span class="lni-chevron-up"></span></h6>
                </div>
                <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqAccordion">
                <div class="card-body">
                <p>A separate document outlining the generic conditions and components of the scholarships offered will be available for download on our website soon. </p>
                <p>In the meantime, please refer to the partner universities for details on their specific programs.</p>
                </div>
                </div>
                </div>
                <h5>Data Privacy</h5>
                <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <div class="card-header" id="headingSix">
                  <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"  data-aos="fade-up">How is my data being used?<span class="lni-chevron-up"></span></h6>
                  </div>
                  <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#faqAccordion">
                  <div class="card-body">
                  <p>We take data privacy very seriously. Any information you provide through our website or conversations will only be used for the Homegrown Clean Energy Solutions Project, such as contacting you about relevant opportunities or project updates. </p>
                  <p>We will never share your information with third parties without your consent.</p>
                  </div>
                  </div>
                  </div>
            </div>
            
            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <i class="lni-emoji-sad"></i>
            <p class="mb-0 px-2">Can't find your answers?</p>
            <a href="{{ route('contact') }} "> Contact us</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript">
              
            </script>
            </body>

  </main>

@endsection