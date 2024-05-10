@extends('layouts.master')

@section('title', 'Opportunities: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/page-title-bg.jpg')}});">
      <div class="container position-relative">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Partnerships</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <div class="container section-title" data-aos="fade-up">
        <br>
      <h2>HCE Partnerships</h2>
      <p><em>The Homegrown Clean Energy Solutions Project isn't a solo act – it's a powerful symphony of collaboration! We're uniting a diverse chorus of brilliant minds from across Africa, each institution bringing its unique strengths to the stage.</p> 
      <p>From leading universities to innovative private companies, our partners and associates are the driving force behind our clean energy revolution.</em></p>
    </div>
    <section id="blog-author" class="blog-author section">

        <div class="container">
          <div class="author-container d-flex align-items-center">
            <img src="main/assets/img/partners/fut.jpg" class="rounded-circle flex-shrink-0" alt="">
            <div data-aos="fade-up">
              <h4>Leading the Charge</h4>
              <br>
              <p>
                Federal University of Technology Minna (FUTMIN), Nigeria, serves as the esteemed coordinator of the Homegrown Clean Energy Solutions Project. </p>
                <p>FUTMIN brings its renowned expertise in clean energy research and development to spearhead this groundbreaking initiative. FUTMIN fosters a collaborative spirit, uniting diverse partners across Africa to achieve a shared clean energy future
              </p>
            </div>
          </div>
        </div>

      </section>

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
            <section id="projects" class="projects section">

                <div class="container">
          
                  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-partners">Partners</li>
                      <li data-filter=".filter-associates">Associates</li>
                    </ul><!-- End Portfolio Filters -->
          
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-partners">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/partners/abomey-calavi.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>App 1</h4> -->
                            <p>University of Abomey-Calavi (UAC), Benin</p>
                            <a href="#" title="visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-partners">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/partners/makerere.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Product 1</h4> -->
                            <p>Makerere University (MU), Uganda</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-partners">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/partners/martyrs.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Branding 1</h4> -->
                            <p>Uganda Martyrs University (UMU), Uganda</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-partners">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/partners/nsukka.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Books 1</h4> -->
                            <p>University of Nigeria, Nsukka (UNN), Nigeria</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-partners">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/partners/zimbabwe.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>App 2</h4> -->
                            <p>University of Zimbabwe (UZ), Zimbabwe</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/instituto.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Product 2</h4> -->
                            <p>Instituto Politecnico Do Porto, Portugal</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/niward.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Branding 2</h4> -->
                            <p>Nigerian Women in Agricultural Research for Development (NiWARD), Nigeria</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/ruforum.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Books 2</h4> -->
                            <p>Regional Universities Forum for Capacity Building in Agriculture (RUFORUM)</p>
                            <a href="http://www.ruforum.org/" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/valec.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>App 3</h4> -->
                            <p>VALEC ELECTRIC LIMITED, Nigeria</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/wascal.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Product 3</h4> -->
                            <p>West African Science Service Centre on Climate Change and Adapted Land Use (WASCAL)</p>
                            
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-associates">
                        <div class="portfolio-content h-100">
                          <img src="main/assets/img/associates/ghana.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <!-- <h4>Branding 3</h4> -->
                            <p>West African Science Services Centre, Ghana</p>
                            <a href="#" title="Visit" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Portfolio Item -->
          
                    </div><!-- End Portfolio Container -->
          
                  </div>
          
                </div>
          
              </section>
  </main>

  @endsection