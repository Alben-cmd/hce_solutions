@extends('layouts.master')

@section('title', 'News: HCE')

@section('content')

<main class="main">
    @include('layouts.faq_style')

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/news-bg.jpg')}});">
      <div class="container position-relative">
        <h1>News</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li><a href=" {{ route('news') }} ">News</a></li>
            <li class="current">scholarship Awardees</li>
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
                          <h2 class="title">HCE Intra-Africa Mobility Masters and PhD Scholarship Awardees</h2>
          
                          <div class="content">
                            <p style="text-align:justify;">
                                We are thrilled to highlight the exceptional recipients of the prestigious HCE Intra-Africa Mobility masters and PhD scholarships. These highly competitive programs provide life-changing educational opportunities for the most promising students across the African continent.
                            </p>
                            <p style="text-align:justify;">
                                This year's cohort of 30 awardees represents the diversity and academic excellence of Africa's next generation of leaders. The group is comprised of 18 male and 12 female scholars, hailing from various countries and pursuing a wide range of master's and doctoral degree programs.
                            </p>
                            <p style="text-align:justify;">
                                These remarkable individuals were selected from a large pool of applicants based on their outstanding academic achievements, demonstrated leadership qualities, and potential to make a meaningful impact on their communities and the continent as a whole.
                            </p>
                            <p style="text-align:justify;">
                                Please join us in celebrating the accomplishments of these 21 inspiring HCE Intra-Africa Mobility master’s scholarship recipients, as well as the 9 exceptional HCE Intra-Africa Mobility PhD scholars:"   
                            </p>
                            
                          </div><!-- End post content -->    
                                
                        </article>
                        <div class="portfolio-item isotope-item filter-construction">
                            <p class="pt-2"><em> Click on desired institution to see Awardees</em>
                            </p>
                            <div class="faq_area section_padding_13 pt-3" id="faq">
                              <div class="container">
                                <div class="">
                                  <div class="accordion faq-accordian" id="faqAccordion">
                                    <div class="row justify-content-center">
                                      <!-- Makerere University Start -->
                                      <div class="col-12 pb-4">
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingThree">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Makerere University - Uganda<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Ajanaku Jose Ozovehe</td>
                                                            <td>Nigeria</td>
                                                            <td>MSc in Renewable Energy</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Obika Anita-Edith Chiemenam</td>
                                                            <td>Nigeria</td>
                                                            <td>MSc in Renewable Energy</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Mbugi Huruma Aseli</td>
                                                            <td>Tanzania</td>
                                                            <td>MSc in Forestry and Biodiversity Management</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">4</th>
                                                            <td>Madukwe Chiagozie Raphael</td>
                                                            <td>Nigeria</td>
                                                            <td>MSc in Renewable Energy</td>
                                                          </tr>
                                                          <tr>
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Mbacho Susan Andrew</td>
                                                                <td>Tanzania</td>
                                                                <td>PhD in Agricultural Engineering</td>
                                                              </tr>
                                                              <tr>
                                                            <th scope="row">6</th>
                                                            <td>Onoyima Samson Chinekwu</td>
                                                            <td>Nigeria</td>
                                                            <td>PhD in Agricultural Engineering</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>  
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Makerere University ends -->
                                      <!-- University of Abomey-Calavi (UAC) starts -->
                                      <div class="col-12 pb-4">
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingFour">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">University of Abomey-Calavi (UAC) - Benin<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Sevidzem Gilles Ajumi</td>
                                                            <td>Cameroon</td>
                                                            <td>MSc in Renewable Energy</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Okwor Ugochukwu Daniel</td>
                                                            <td>Nigeria</td>
                                                            <td>MSc in Environmental Management and Control</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Abdoul Aziz</td>
                                                            <td>Cameroon</td>
                                                            <td>PhD in Energy Efficiency and Renewable Energy</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- University of Abomey-Calavi (UAC) ends -->
                                      <!-- Uganda Martyrs University start -->
                                      <div class="col-12 pb-4">
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingSeven">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">Uganda Martyrs University - Uganda<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Hountongninou Débora Gisèle</td>
                                                            <td>Bénin</td>
                                                            <td>MSc in Agroecology and Food Systems</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Bossavi Senani Irene</td>
                                                            <td>Bénin</td>
                                                            <td>MSc in Agroecology and Food Systems</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Salome Waweru Wambui</td>
                                                            <td>Kenya</td>
                                                            <td>MSc in Agroecology</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">4</th>
                                                            <td>Soumare Mamoutou</td>
                                                            <td>Mali</td>
                                                            <td>MSc in Agroecology</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>
                                            </div>                                      
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Uganda Martyrs University ends -->
                                      <!-- University of Nigeria start -->
                                      <div class="col-12 pb-4" id='selection'>
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingEight">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">University of Nigeria - Nigeria<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapseEight" aria-labelledby="headingEight" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mwebesa Emmanuel</td>
                                                            <td>Uganda</td>
                                                            <td>Artifiicial Intelligence</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Ukobizaba Elyse</td>
                                                            <td>Rwanda</td>
                                                            <td>Environmental Management and Control</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Odur James</td>
                                                            <td>Uganda</td>
                                                            <td>Renewable Energy</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">4</th>
                                                            <td>Oyenyeboth Patricia</td>
                                                            <td>Uganda</td>
                                                            <td>Climate change, Economics, policy and Innovation.</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">5</th>
                                                            <td>Namirembe Grace</td>
                                                            <td>Uganda</td>
                                                            <td>PhD. In environmental management and Control</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">6</th>
                                                            <td>Nuwahereza Nelson</td>
                                                            <td>Uganda</td>
                                                            <td>PhD. In environmental management and Control</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- University of Nigeria end -->
                                      <!-- FUT start -->
                                      <div class="col-12 pb-4" id='selection'>
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingfut">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsefut" aria-expanded="true" aria-controls="collapsefut">Federal University Of Technology Minna - Nigeria<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapsefut" aria-labelledby="headingfut" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Vandi Jusu</td>
                                                            <td>Sierra Leone</td>
                                                            <td>MEng in Electrical Electronics Engineering</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Awino Sindrella</td>
                                                            <td>Uganda</td>
                                                            <td>Meng. Agriculture and Bioresources Engineering</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Akwec George</td>
                                                            <td>Uganda</td>
                                                            <td>Meng. Agriculture and Bioresources Engineering</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">4</th>
                                                            <td>Kouetcha Esaie</td>
                                                            <td>Bénin</td>
                                                            <td>MEng in Electrical Electronics Engineering</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">5</th>
                                                            <td>Pekeyi Malaguièhèwa Grâce</td>
                                                            <td>Togo</td>
                                                            <td>PhD in Climate change and Human Habitat</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">6</th>
                                                            <td>Wirnkar Basil Nsanyuy</td>
                                                            <td>Cameroon</td>
                                                            <td>PhD in Electrical Electronics Engineering</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>                                   
                                      <!-- FUT end -->
                                      <!-- University of Zimbabwe start -->
                                      <div class="col-12 pb-4">
                                        <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                          <div class="card-header" id="headingFive">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">University of Zimbabwe - Zimbabwe<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                          </div>
                                          <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqAccordion">
                                            <div class="card-body">
                                              
                                              <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Nationality</th>
                                                            <th scope="col">Program</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mugaiga Ronald</td>
                                                            <td>Uganda</td>
                                                            <td>MSc in environmental systems engineering</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>Awomewe Olumide Emmanuel</td>
                                                            <td>Nigeria</td>
                                                            <td>MSc in Climate Science and Climate System Modelling</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">3</th>
                                                            <td>Ogbobe Obiechinna Emmanuel</td>
                                                            <td>Nigeria</td>
                                                            <td>Masters in Climate Change and Food Systems</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">4</th>
                                                            <td>Atto Gloria Faith</td>
                                                            <td>Uganda</td>
                                                            <td>DPhil in Climate Change and Renewable Energy (by Research)</td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">5</th>
                                                            <td>Eze Emenike Friday</td>
                                                            <td>Nigeria</td>
                                                            <td>PhD in Agroecology and Food Systems</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>
      
                                              
                                          </div>
                                      </div>
                                      <!-- University of Zimbabwe ends -->
                                      </div> 
                                       
                                  </div>
                                     
                                </div> 
                                
                              </div>
                              
                            </div>
          
                      </div>
                    </div><!-- /Blog Details Section -->
          
                  </div>
                </div>
              </div>
              @include('layouts.faq_javafile')
  </main>

  @endsection