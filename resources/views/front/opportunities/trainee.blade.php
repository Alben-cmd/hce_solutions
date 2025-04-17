@extends('layouts.master')

@section('title', 'Activities: HCE')

@section('content')

<main class="main">
    @include('layouts.faq_style')

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/project-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Trainee Mobility Programme</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li class="current">Trainee Mobility Programme</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
    <section id="alt-services" class="alt-services section">
        <div class="container section-title pb-2" data-aos="fade-up" style="padding-top: 20px">
            <h2> Call for Trainee Applications</h2>
            <p>The Homegrown Clean Energy Solutions (HCE) project invites applications for its Trainee Mobility Programme, a three-month funded training initiative aiming to promote energy independence and environmental well being through collaboration and innovation, addressing climate challenges across Africa. </p>
            <br>
            <p class="pb-3">Applications are <strong>On</strong> and will close on 26th May 2025 by Midnight GMT +1</p>
            <p class="pb-3">Awardees will be announced on<strong>  9th June 2025.</strong> </p>
            <p>Onboarding will take place on 30th June 2025.</p> 
            <!-- Download and apply Button -->
            <div style="text-align: center; margin: 20px 0;">
                <a href="{{ asset('main/assets/img/trainee_call.pdf') }}" download class="badge badge-pill badge-info" style="background-color: #0074D9; color: white; padding: 10px 20px; margin-right: 10px;">
                    Download Call for Applications
                </a>
                <a href="https://bit.ly/HCE_TraineeApply" download class="badge badge-pill badge-info" style="background-color: #0074D9; color: white; padding: 10px 20px;">
                    Click to Apply
                </a>
            </div>
            <hr>
          </div><!-- End Section Title -->
          <div class="container">          
                    
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative pt-2">
                    
                    <h3>About the Programme</h3>
                    <p>Africa faces significant energy access challenges, with over 50% of its population lacking electricity. However, the continent holds vast untapped renewable energy resources. The HCE Solutions Project empowers universities, the private sector, and local communities to develop <strong> homegrown clean energy solutions </strong>tailored to their specific needs.</p>
                    <h4>Objectives</h4>
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Promote the development of clean energy solutions for underrepresented communities.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Facilitate knowledge sharing and technology transfer among participating institutions.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Enhance entrepreneurship skills in clean energy solutions for climate change adaptation and mitigation.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Promote gender equality and social inclusion in clean energy initiatives.</span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <h5>Participating Institutions</h5>
                    
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Federal University of Technology Minna (FUTMIN), Nigeria</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Makerere University, Uganda</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>University of Abomey-Calavi (UAC), Benin</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Uganda Martyrs University (UMU), Uganda</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>University of Nigeria (UNN), Nsukka</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>University of Zimbabwe (UoZ)</span></li>
                                
                            </ul>
                        </div>
                    </div>

                    <h5>About the Trainee Workshop</h5>
                    <p>This is a mobility training programme where trainees will participate in practical, hands-on training outside their home country. Training will be conducted by:</p>
                    
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ol>
                                <li>Valec Electric Limited (Nigeria)</li>
                                <li>SustEnergy Pvt Limited (Zimbabwe)</li>                                
                            </ol>
                        </div>
                    </div>
                    <p>Upon completion, trainees must commit to submitting a prototype of a clean energy solution developed during the training program to the HCE Solutions team.</p>
                    <hr>

                    <h5>Eligibility Requirements</h5>
                    <p>To apply, you must meet the following criteria:</p>
                    
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Be a citizen of one of the four participating countries: Benin, Nigeria, Uganda, or Zimbabwe.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Be a current student in the third or fourth year of study at one of the six participating universities.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Demonstrate interest or experience in clean energy development.</span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <h5>Available Training Programs</h5>

                    <div class="faq_area section_padding_13 pt-3" id="faq">
                        <div class="container">
                          
                            <div class="accordion faq-accordian" id="faqAccordion">
                              <!-- <h6 style="color:white;"><strong></strong></h6> -->
                              <div class="row justify-content-center">
                                <div class="col-6 pb-4">
                                  <div class="card rounded-3 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="card-header" id="headingOne">
                                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  data-aos="fade-up">At Valec Electric Ltd (Nigeria)<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                    </div>
                                    <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                      <div class="card-body">
                                        
                                        <div class="features section">
                                            <p>1. Solar Power System</p>
                                            <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                    
                                                <ul>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Power Design</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Power Installation</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Power Maintenance</span></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        <div class="features section"> 
                                            <p>2. Solar Borehole</p>
                                            <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                    
                                                <ul>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Borehole Design</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Borehole Installation</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Solar Borehole Maintenance</span></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="features section"> 
                                            <p>3. Biogas Production and Distilled Water Production</p>
                                            <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                    
                                                <ul>
                                                    <li><i class="bi bi-check2-all"></i> <span>Design</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Construction</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Production</span></li>
                                                    <li><i class="bi bi-check2-all"></i> <span>Maintenance</span></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 pb-4">
                                  <div class="card rounded-3 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="card-header" id="headingTwo">
                                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"  data-aos="fade-up">At SustEnergy Pvt Ltd (Zimbabwe)<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                      <div class="card-body">
                                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <div class="features section">
                                                <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                                    <ul>
                                                        <li><i class="bi bi-check2-all"></i> <span>Solar PV Design, Installation, and Maintenance</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Solar Thermal Design, Installation, and Maintenance</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Solar PV for Kids and Teenagers</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Energy Efficiency for Kids and Teenagers</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Energy Efficiency Technician</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Fuel Cell Technology</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Green Hydrogen Technology</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Solar Water Pumping</span></li>
                
                                                        <li><i class="bi bi-check2-all"></i> <span>Energy Audit Technician</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Solar Drying Technology</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Biogas Technology Design and Installation</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Biomass Improved Cook Stove Design</span></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>        
                            </div>
                        </div>
                      </div>

                    <hr>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <h5>Scholarship Package</h5>

                    <p>Selected candidates will receive the following support:</p>
                    
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Fully paid training costs.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>A monthly stipend of €1,230.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Visa fees to Nigeria or Zimbabwe.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Three months of practical training on clean energy development.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>A certificate of competence in clean energy development.</span></li>                                
                            </ul>
                        </div>
                    </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Important Dates</h5>

                    
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Application Opens:</strong>  17th April 2025</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Application Closes:</strong>  26th May 2025</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Announcement of Awardees:</strong>   9th June 2025</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Onboarding:</strong>  30th June 2025</span></li>                               
                            </ul>
                        </div>
                    </div>
                        </div>
                    </div>

                    <h5>How to Apply</h5>

                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Complete the online application form: <a href="https://bit.ly/HCE_TraineeApply">Apply Here</a></span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Submit a <strong>Letter of Attestation</strong> from your Head of Department.</span></li>
                                
                            </ul>

                            <p class="pb-2"><strong> Deadline:</strong> Applications must be submitted before <strong>26th May 2025 (Midnight GMT+1).</strong></p>
                        </div>
                    </div>
                    
                    <hr>

                    <h5>Contact Details</h5>

                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span><strong>FUT Minna:</strong> Prof. Caroline Alenoghena; <a href="mailto:carol@futminna.edu.ng">carol@futminna.edu.ng</a> | +234 803 501 5984</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>UNN:</strong> Cynthia Nwobodo; <a href="mailto:cynthia.nwobodo@unn.edu.ng">cynthia.nwobodo@unn.edu.ng</a> | +234 803 946 2574</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Makerere University:</strong>  Grace Nakabonge; <a href="mailto:grace.nakabonge@mak.ac.ug">grace.nakabonge@mak.ac.ug</a> | +256 782 356 607</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong>Uganda Martyrs University: </strong>Dr. Robinah S. Nakabo; <a href="mailto:rnakabo@umu.ac.ug">rnakabo@umu.ac.ug</a> | +256 776 802 981</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong> University of Abomey-Calavi:</strong> Michel Dossou; <a href="mailto:michel.dossou@uac.bj">michel.dossou@uac.bj</a> | +229 97 54 27 44</span></li>
                                <li><i class="bi bi-check2-all"></i> <span><strong> University of Zimbabwe: </strong>Dr. Blessing Magonziwa; <a href="mailto:blessing.magonziwa21@alumni.colostate.edu">blessing.magonziwa21@alumni.colostate.edu</a> | +263 775 990 146</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Download and apply Button -->
                    <div style="text-align: center; margin: 20px 0;">
                        <a href="{{ asset('main/assets/img/trainee_call.pdf') }}" download class="badge badge-pill badge-info" style="background-color: #0074D9; color: white; padding: 10px 20px; margin-right: 10px;">
                            Download Call for Applications
                        </a>
                        <a href="https://bit.ly/HCE_TraineeApply" download class="badge badge-pill badge-info" style="background-color: #0074D9; color: white; padding: 10px 20px;">
                            Click to Apply
                        </a>
                    </div>
                    

                </div>
            </div><!-- End Service Item -->
     

        </div>
    </section>
    @include('layouts.faq_javafile')
  </main>

  @endsection