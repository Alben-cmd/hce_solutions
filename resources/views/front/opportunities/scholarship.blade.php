@extends('layouts.master')

@section('title', 'Scholarship: HCE')

@section('content')

  <main class="main">
    @include('layouts.faq_style')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/scholarship-bg.jpg')}});">
      <div class="container position-relative">
        <h1>Scholarship</h1>
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
            <section id="projects" class="projects section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up" style="padding-top: 20px">
                <h2> EACEA Grant</h2>
                <p id="general"><strong>Shape Africa's clean energy future with a world-class scholarship! </strong>This program connects you with prestigious universities offering a range of exceptional degrees. Master cutting-edge technologies and groundbreaking strategies to build a sustainable future.</p>
                <br>
                <p>A consortium of six African universities awarded funding from the European Education and Culture Executive Agency (EACEA) for an academic mobility scheme focused on Homegrown Clean Energy Solutions, targeting postgraduate students and staff for capacity building.</p>
                <br>
                <p><strong><em>Apply, now by sending your CV and a 3 page proposal documents to <a href="mailto:hce.solutions@futminna.edu.ng">hce.solutions@futminna.edu.ng</a></em></strong></p>
              </div><!-- End Section Title -->
              <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <div class="counter_wrapper">
                                    <span class="counter">14</span>
                                    <p>Executed Projects</p>
                                </div>
                            </div>
        
              <div class="container">
        
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        
                  <ul class="portfolio-filters isotope-filters" style="position: sticky; top: 70px; z-index: 1000;" data-aos="fade-up" data-aos-delay="100">
                    
                    <li class="filter-active"><span class="badge rounded-pill bg-light text-dark" disabled aria-disabled="true"></span</li>
                      <li><a href="#general"><span class="badge rounded-pill bg-success">General Information</span></a></li>
                    <li><a href="#requirements"><span class="badge rounded-pill bg-success">Admission Requirements</span></a></li>
                    <li><a href="#selection"><span class="badge rounded-pill bg-success">Selection Process</span></a></li>
                  </ul><!-- End Portfolio Filters -->
                    <hr>
                    <div class="portfolio-item isotope-item filter-remodeling">
                        <p style="text-align:justify;">The program will support 21 Master's students, 9 Doctorate students, 7 trainees, and 4 staff into the mobility Program from across national and disciplinary borders for postgraduate studies, skills acquisition, and research/teaching mobility aimed at developing the capability for developing homegrown clean energy solutions to address climate challenges in Africa. The countries in Target Group I are Benin, Nigeria, Uganda, and Zimbabwe. Other countries of Africa are grouped under the Target Group II.</p>
                        <h5>For the Target Group I, the Institutions Involved are:</h5>
                        <div class="row">
                          <div class="col-6">
                            <div class="features section">
                              <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                <ul>
                                  <li><i class="bi bi-check2-all"></i> <span>Federal University Minna, Niger, State Nigeria (FUTMIN).</span></li>
                                  <li><i class="bi bi-check2-all"></i> <span>Makerere University, Kampala, Uganda.</span></li>
                                  <li><i class="bi bi-check2-all"></i> <span>University of Abomey Calavi, Benin Republic (UAC).</span></li>
                                </ul>
                              </div>
                            </div> 
                          </div>
                          <div class="col-6">
                            <div class="features section">
                              <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                <ul>
                                  <li><i class="bi bi-check2-all"></i> <span>Uganda Martyrs University, Nkozi, Uganda (UMU).</span></li>
                                  <li><i class="bi bi-check2-all"></i> <span>University of Nigeria, Nsukka (UNN) Enugu State, Nigeria.</span></li>
                                  <li><i class="bi bi-check2-all"></i> <span>University of Zimbabwe (UoZ).</span></li>
                                </ul>
                              </div>
                            </div> 
                          </div>
                        </div>
                        <h6>All Other Universities in Africa Qualify for the Target Group II.</h6>
                        <br>
                        
                        <div class="faq_area section_padding_13 pt-3" id="faq">
                          <div class="container">
                            <div class="">
                              <div class="accordion faq-accordian" id="faqAccordion">
                                <h6 style="color:white;"><strong>Details of Program Activities</strong></h6>
                                <div class="row justify-content-center">
                                  <div class="col-6 pb-4">
                                    <div class="card rounded-3 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                      <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  data-aos="fade-up">The Activities under this Program<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                        <div class="card-body">
                                          <p><strong>The mobility of two target groups (Target group I and II):</strong></p> 
                                          <p style="text-align:justify;"><strong>Target Group 1:</strong> Will be registered/admitted in or have obtained a degree (or equivalent) from one of the African beneficiaries Higher Education Institutions (HEIs).</P> 
                                          <p style="text-align:justify;"><strong>Target Group 2:</strong> Will be persons from another HEI, which is not participating as a beneficiary but established in one of the eligible countries in Africa.</p>
                                          <p style="text-align:justify;">Eligible candidates should not have already benefited from another MOBAF 2022-2027 scholarship.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-6 pb-4">
                                    <div class="card rounded-3 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                      <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"  data-aos="fade-up">Three Types of Mobility Supported<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                        <div class="card-body">
                                          <p><strong>Masters or Doctoral level mobility: </strong></p>
                                          <ul>
                                            <li>PhD Students: full degree opportunities of 36 months duration</li>
                                            <li>Master’s degree students: full degree opportunities of 24 months duration abroad</li>
                                          </ul>
                                          <p style="text-align:justify;">This mobility option can be either short-term or for the entire duration of an academic programme. The short term is for credit seeking opportunities.</P>
                                          <p style="text-align:justify;"><strong>Staff members Mobility:</strong> 4 staff exchange opportunities of up to 3 months duration abroad is available for Academic, Administrative, and Technical Staff members working in any of the partner institutions in HCE consortium.</p>
                                          <p style="text-align:justify;"><strong>Traineeship mobility:</strong> 7 trainees’ opportunity for up to 3 months duration abroad. To qualify, you must be enrolled in a Bachelor/Master/PhD programme at one of the partner institutions in HCE consortium.</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </div>        
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6 class="pt-3">Benefits</h5>
                        <p>The program will provide the tuition fee and pay a monthly subsistence allowance ( Masters Students @ €890 per month, Ph.D students @ €1,230 per month, trainee @ €1,230 per month, and staff @ €2,370 per month). The scholarship will: </p>
                        <div class="row">
                          <div class="col-6">
                            <div class="features section" id="requirements">
        
                              <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                  <ul>
                                      <li><i class="bi bi-check2-all"></i> <span>Provide you a living allowance and an insurance</span></li>
                                      <li><i class="bi bi-check2-all"></i> <span>Contribute to your travel and visa expenses</span></li>
                                      <li><i class="bi bi-check2-all"></i> <span>Cover your participation costs (e.g. tuition and registration fees)</span></li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="features section">
        
                              <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                  <ul>
                                      <li><i class="bi bi-check2-all"></i> <span>Contribute to your research expenses depending on the available budget </span></li>
                                      <li><i class="bi bi-check2-all"></i> <span>Scholarship holders with disabilities can receive additional support. </span></li>
                                      <li><i class="bi bi-check2-all"></i> <span>University of Zimbabwe (UoZ).</span></li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      
                          <h6>Women and persons living with disabilities are strongly encouraged to apply.</h6>
                          <hr>

                    </div><!-- End Portfolio Item -->
                    
        
                    <div class="portfolio-item isotope-item filter-construction">
                      <h5 class="pt-2 pb-2"><strong>Requirements for the Different Universities:</strong></h5>
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
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/makerere.png" class="img-fluid" alt="masters academic flow"> </div>
                                        <h4>Entry Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Master’s Degree Programmes offered at Makerere University</p>
                                        <p>General Requirements</p></strong>
                                        
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>An applicant must be a holder of at least a Second-Class Lower Division degree or its equivalent awarded by Makerere University or any other recognized/ chartered institution at the time of completion.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>An applicant who is a holder of a third-class degree or its equivalent may be admitted only after providing evidence of academic growth and maturity in the desired field of study as judged by the Board of Research and Graduate Training</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>A Uganda Advanced Certificate of Education (UACE) or its equivalent with at least One Principal Pass and Two Subsidiary passes obtained at the same sitting.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>A Ugandan Certificate of Education (UCE) or its equivalent with at least five passes</span></li>
                                            
                                            </ul>
                                          </div>
                                        </div>  
                                        <p><strong>Master of Science (M.Sc.) in Forestry and Biodiversity Management </strong></p>
                                        <p style="text-align:justify;">Applicants must possess a good honors degree in relevant disciplines such as Botany, Zoology, Ecology, Agriculture, Forestry, Environmental Sciences, Meteorology, Geography, Conservation Biology, Wildlife management, and Tourism from a recognized University/Institution.</p>
                                        <p><strong>MSc in Renewable Energy </strong></p>
                                        <p style="text-align:justify;">To qualify for admission, the candidate must hold a Bachelor’s degree in either Engineering or Science of second class lower division and above in a relevant field (Mechanical Engineering, Electrical Engineering, Chemical Engineering, Civil Engineering, Environmental Engineering, Physics, Chemistry and Mathematics) from a recognized institution. </p>
                                        <p style="text-align:justify;">Normally a Bachelor’s degree of at least second class, lower division or equivalent from a recognised University.  Applicants with lower qualifications must satisfy the relevant department and the Postgraduate Admissions Board that they have acquired academic growth, for instance, by evidence of research and publications or a relevant Postgraduate Diploma of Second-class division. In some departments, a qualifying course followed by an examination is given.</p>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Doctor of Philosophy (PhD)- By Research Only offered at Makerere University</p>
                                          <p>General Requirements</p></strong>
                                          <div class="features section">
                                            <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                              <ul>
                                                <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>A Master’s degree from a recognised/chartered University at the time of completion in a field relevant to the area of further studies. A student shall be granted provisional registration up to one academic year on the basis of acceptance of academic qualification and presentation of an acceptable research synopsis of 3-5 pages.</span></li>
                                                <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>During the academic year, a PhD student should develop a comprehensive research proposal for full admission with the help of senior members of the academic staff in the relevant fields of study.</span></li>
                                                <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>The respective Boards of Colleges/Schools should identity supervisors and Doctoral Committees for each student (See Section 8.0 of the Graduate Hand Book).</span></li>
                                                <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>The Senate shall, on the recommendation of the Academic Board, appoint one or more supervisors to advise a candidate whose subject of special study or research has been approved, and the candidate shall be required to work in close association with the supervisors and the Doctoral Committee (DC) members.</span></li>
                                                <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>When a Research proposal of a PhD student is found satisfactory by the School Higher Degrees & Research Committee after defending, a recommendation is sent to the DRGT Board for action. Thereafter, the student shall be granted a full registration as Doctor of Philosophy (PhD) degree student of Makerere University for a period of three to four years.
                                                  </span></li>
                                              
                                              </ul>
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
                                        <!-- <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Programme</th>
                                              <th scope="col">Programme Name</th>
                                              <th scope="col">Department</th>
                                              <th scope="col">Faculty</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Master</td>
                                              <td>Master in Energy Efficiency and Renewable Energy</td>
                                              <td>Doctoral school of engineering sciences</td>
                                              <td>Doctoral school of engineering sciences</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>Doctorate</td>
                                              <td>PhD in Energy Efficiency and Renewable Energy</td>
                                              <td>Doctoral school of engineering sciences</td>
                                              <td>Doctoral school of engineering sciences </td>
                                            </tr>
                                            
                                          </tbody>
                                        </table> -->
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/abomey.png" class="img-fluid" alt="masters academic flow"> </div>
                                        <h4>Admission Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Master of Science (M.Sc.) in Energy Efficiency and Renewable Energy (duration: 1 year)</p></strong>
                                        
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Graduates of the University of Abomey-Calavi (UAC) or other recognized universities who have obtained an approved master's degree with at least of second class honours lower division (not less than CGPA of 2.5) or its equivalent in the relevant disciplines [Physical Sciences (chemistry, physics), mathematics, engineering (electrical, civil, computing and telecommunications, energy and mechanical)].</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates must satisfy the matriculation requirements of the University of Abomey-Calavi (UAC) including certificate in English.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates with degrees from other universities must go through the process of authentication by the national accrediting body.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must have obtained at least one certificate in English.</span></li>
                                            
                                            </ul>
                                          </div>
                                        </div>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Doctor of Philosophy (Ph.D.) in Energy Efficiency and Renewable Energy (duration: 3 years)</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Graduates of the University of Abomey-Calavi (UAC) or other recognized universities who have obtained the M.Sc. degree in renewable energy research or the equivalent degree with honours. The course of study is based on course work and research.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates must satisfy the matriculation requirements of the University of Abomey-Calavi (UAC) including certificate in English.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates with degrees from other universities must go through the process of authentication by the national accrediting body.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must have obtained at least one certificate in English.</span></li>
                                            
                                            </ul>
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
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/uganda.png" class="img-fluid" alt="masters academic flow"> </div>
                                        <h4>Admission Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> PhD in Agroecology and Food Systems</p></strong>
                                        
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>A strong masters’ degree in agricultural, natural related sciences or social sciences from a recognized University. Two (2) years’ work experience in agricultural or rural development related initiatives will be an added advantage.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Proficiency in English, both spoken and written. Candidates without an English background may be required to take a remedial course in English language as a prerequisite.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>A 4 - 5-page concept note indicating students’ research interest areas and their motivation for joining the Program.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Languages: upon admission each candidate will be required to learn a foreign language i.e., French or German as part of the non-credited elective courses.</span></li>
                                            
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MSc. In Agroecology</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must have at least a second-class lower degree from a recognized university in the relevant field.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>No candidate unless under exceptional circumstances will be admitted for the postgraduate degree programme immediately after the bachelor’s course without practical experience in the field.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Prospective Master’s students will be admitted only if they pass the Graduate Admission Test (GAT) of Uganda Martyrs University or the specific faculty/department</span></li>
                                            
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MSc. In Monitoring and Evaluation</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Applicants should have a Masters degree or, 2nd Upper Bachelor’s degree class (or its equivalent GPA) or 2nd class lower and at least 2 years working experience in any field associated with social development.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Prospective Master’s students will be admitted only if they pass the Graduate Admission Test (GAT) of Uganda Martyrs University or the specific faculty/department.</span></li>
                                                                                          
                                            </ul>
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
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/nigeria.png" class="img-fluid" alt="masters academic flow"> </div>
                                        {{-- <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Programme</th>
                                              <th scope="col">Programme Name</th>
                                              <th scope="col">Department</th>
                                              <th scope="col">Faculty</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Master</td>
                                              <td>Masters in Environmental Management and Control</td>
                                              <td>Centre for Environmental Management & Control</td>
                                              <td>Centre for Environmental Management & Control</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>Doctorate</td>
                                              <td>PhD in Environmental Management and Control</td>
                                              <td>Centre for Environmental Management & Control</td>
                                              <td>Centre for Environmental Management & Control</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">3</th>
                                              <td>Master</td>
                                              <td>Masters in Renewable Energy</td>
                                              <td>Department of Agricultural & Bioresources Engineering</td>
                                              <td>Engineering</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">4</th>
                                              <td>Master</td>
                                              <td>Masters in Artificial Intelligence</td>
                                              <td>Computer Science</td>
                                              <td>Physical Sciences</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">5</th>
                                              <td>Doctorate</td>
                                              <td>PhD in Artificial Intelligence</td>
                                              <td>Computer Science</td>
                                              <td>Physical Sciences</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">6</th>
                                              <td>Master</td>
                                              <td>Masters in Climate Change Economics, Policy and Innovation</td>
                                              <td>Institute of Climate Change</td>
                                              <td>Institute of Climate Change</td>
                                            </tr>
                                            
                                          </tbody>
                                        </table> --}}
                                        <h4>Entry Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Master of Science (M.Sc.) Environmental Management and Control</p></strong>
                                        
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Graduates of the University of Nigeria or other recognized universities who have obtained the approved degree, with a minimum of second class honours lower division (not less than CGPA of 2.5) or its equivalent in the relevant disciplines [Biological Sciences, Physical sciences (chemistry, physics and geology), Agriculture (agric economics, soil science, crop science), Social sciences (economics and geography), Environmental Studies, Engineering (chemical, civil and mechanical engineering)].</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates with university honours degree who also hold the PGD in Environmental Management and Control of the University of Nigeria or other recognized universities with a minimum CGPA of 3.5 on a 5 - 5-point scale or 3.00 on a 4-point scale.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Must have obtained a minimum of credit passes in English language and Mathematics at O’ level among the five subjects passed with credit grades.</span></li>
                                              
                                            
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Doctor of Philosophy (Ph.D.) in Environmental Management </p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Graduates of the University of Nigeria or other recognized universities who have obtained the degree of M.Sc. in Environmental Management or the equivalent with a minimum CGPA of 3.50 on a 5-point scale or 3.00 on a 4-point scale. The mode of study is by course work and research.</span></li>
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MSc in Renewable Energy</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Applicants must possess a B.Sc or B.Eng degree with at least a GPA of 2.5 on a 5-point scale in Agricultural and Bioresources Engineering or a related field of Engineering.</span></li>
                                              
                                                                                          
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MSc in Artificial Intelligence</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must have five (5) credit passes including English, Mathematics and any other three qualifying subjects for undergraduate admission in the candidates' Department.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates with a bachelor's degree from an approved University must obtain a minimum of second-class lower division with a CGPA of 3.0 on a 5-point scale.</span></li>
                                              
                                                                                          
                                            </ul>
                                          </div>

                                          <strong><p><i class="bi bi-mortarboard-fill"></i> PhD in Artificial Intelligence</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must have an Academic Master's degree in Computer Science with a CGPA of 4.0 on a 5-point scale and a thesis score not lower than 60% (B).</span></li>

                                              <li><i class="bi bi-check2-all"></i> <span>The duration for a PhD programme shall be: full-time: A minimum of 6 Semesters and a maximum of 10 Semesters</span></li>
                                                                                          
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MSc in Climate Change Economics, Policy and Innovation</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span>Candidates must satisfy the matriculation requirements of the university of Nigeria including credit in English & Mathematics.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>⁠Candidates with the Bachelor's Degree from the University of Nigeria or other approved Universities whose program is accredited by the national accrediting body</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>⁠Candidate with a minimum of second class lower Degree & a CGPA of 3.0 on a five-point scale.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span>⁠Candidate with the Postgraduate Diploma in Climate Change Economics, Policy & Innovation of the University of Nigeria or awarded by a recognized institution with not less than an upper credit.</span></li>
                                              
                                                                                          
                                            </ul>
                                          </div>
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
                                    <div class="card-header" id="headingFut">
                                      <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFut" aria-expanded="true" aria-controls="collapseFut">Federal University Of Technology Minna - Nigeria<span class="lni-chevron-up"><i class="bi bi-arrow-bar-down"></i></span></h6>
                                    </div>
                                    <div class="collapse" id="collapseFut" aria-labelledby="headingFut" data-parent="#faqAccordion">
                                      <div class="card-body">
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/fut.png" class="img-fluid" alt="masters academic flow"> </div>
                                        {{-- <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Programme</th>
                                              <th scope="col">Programme Name</th>
                                              <th scope="col">Department</th>
                                              <th scope="col">Faculty</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Doctorate</td>
                                              <td>PhD in Climate Change and Human Habitat</td>
                                              <td>West African Science Service Centre on Climate Change and Adapted Land Use (WASCAL)</td>
                                              <td>West African Science Service Centre on Climate Change and Adapted Land Use (WASCAL)</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>Master</td>
                                              <td>MEng. Agriculture and Bioresources Engineering/td>
                                              <td>Department of Agriculture and Bioresources Engineering</td>
                                              <td>School of Infrastructure, Process Engineering and Technology</td>
                                            </tr>
                                          </tbody>
                                        </table> --}}
                                        <h4>Entry Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> PhD in Climate Change and Human Habitat</p></strong>

                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Five O’ Level credit passes in Mathematics, English, Physics and any two of the following relevant subjects (Geography, Agricultural Science/Biology, Economics) or its equivalent in Francophone countries (i.e. hold preferably a  Baccalaureat C or D).</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>First Degree (B.Tech. or B.Sc.) with a minimum of 2nd Class Upper Degree (or Assez Bien (B) for the Francophone applicants) from a recognised academic institutions in any discipline related to the environment (most especially geography, agriculture, land resources, water resources, urban planning and climate science).</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Master’s Degree graduates from any recognised University, but MUST be citizens from countries participating in WASCAL, in any discipline related to the environment (most especially geography, agriculture, land resources, water resources, urban planning and climate science).</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Such Master degree must be of an average performance of “B” grade or weighted average of 60% or a minimum Cumulative Grade Point Average of 3.50.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Applicants MUST possess basic knowledge and skills of GIS and remote sensing   applications, with a minimum of B-grade in the transcript of either the Bachelor’s or Master’s degree.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Applicants should ensure that academic transcripts from items (ii) and (iii) and research interest/motivation are received before the selection process.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>For Nigerian applicants, NYSC Certificate/Exemption is required.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Candidates must provide 3 referees, one of whom must be his/her Master’s thesis Supervisor. If it is a WASCAL Alumnus, the Director’s recommendation will be required as top priority.</span></li>
                                            </ul>
                                          </div>
                                        </div>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> MEng. Agriculture and Bioresources Engineering</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li><i class="bi bi-check2-all"></i> <span> A minimum of Second Class Lower or PGD with a minimum of Upper Credit from FUT Minna or any recognized institution for candidate applying for Master’s Degree Programme.</span></li>
                                              <li><i class="bi bi-check2-all"></i> <span> At least five ‘O’ Level Credits to include English Language, Mathematics, Physics, Chemistry and any one of the following: Biology/Agricultural Science, Technical Drawing, Geography or Economics. </span></li>
                                              <li><i class="bi bi-check2-all"></i> <span> MEng (Full-time only) in the following areas of specialization: 
                                                <br> i) Farm Power and Machinery.    <br> ii) Agricultural Crop Processing and Storage <br> iii) Soil and Water Engineering</span></li>
                                            </ul>
                                          </div>
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
                                        <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/zimbabwe.png" class="img-fluid" alt="masters academic flow"> </div>
                                        <!-- <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Programme</th>
                                              <th scope="col">Programme Name</th>
                                              <th scope="col">Department</th>
                                              <th scope="col">Faculty</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Master</td>
                                              <td>Masters in Climate Science and Climate System Modelling</td>
                                              <td>Space Science and Applied Physics</td>
                                              <td>Science</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>Master</td>
                                              <td>Masters in Climate Change and Food Systems</td>
                                              <td>Soil Science and Environment</td>
                                              <td>Agriculture Environment and Food Systems</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">3</th>
                                              <td>Master</td>
                                              <td>Master in Environmental Systems Engineering</td>
                                              <td>Agricultural and Biosystems Engineering</td>
                                              <td>Agriculture Environment and Food Systems</td>
                                            </tr>

                                            <tr>
                                              <th scope="row">4</th>
                                              <td>Doctorate</td>
                                              <td>DPhil in Climate Change and Renewable energy (by research)</td>
                                              <td>Agricultural and Biosystems Engineering</td>
                                              <td>Agriculture Environment and Food Systems</td>
                                            </tr>
                                            
                                          </tbody>
                                        </table> -->
                                        <h4>Entry Requirements</h4>
                                        <br>
                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Masters in Climate Science and Climate System Modelling</p></strong>
                                        
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>To be eligible for admission to the Master of Science Degree in MSc Climate Science and Climate Systems Modelling an applicant will normally be required to have obtained a BSc Honors Degree in Meteorology and Climate Sciences, Physics, Applied Physics, Geography, Chemistry or an appropriate engineering discipline with a degree class of 2.1 or better or an equivalent degree.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>An applicant with a BSc Degree with a major in Meteorology and Climate Science, Physics, Applied Physics, Geography, Chemistry, or an appropriate engineering discipline AND at least five years of relevant work experience may be considered for special entry.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Normally an applicant with a BSc Degree with a major in Meteorology and Climate Science, Physics, Applied Physics, Geography, Chemistry, or an appropriate engineering discipline will be required to register to upgrade that degree to a BSc Honours Degree in Physics.</span></li>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>An applicant with a degree that does not satisfy Section 3.2 may be allowed to take approved modules from the BSc Honours Degree in Meteorology and Climate Science to qualify for admission.</span></li>
                                            
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Masters In Environmental Systems Engineering</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>At least a Lower Second class Honours degree from a recognized institution of higher learning in any one of the following areas: Agricultural Engineering; Civil Engineering; Chemical Engineering; Electrical Engineering; Environmental Engineering; Mechanical Engineering; Mining and Metallurgical Engineering</span></li>
                                            </ul>
                                          </div>
                                        </div>

                                        <strong><p><i class="bi bi-mortarboard-fill"></i> Doctor of Philosophy (DPhil) in Climate Change and renewable energy</p></strong>
                                        <div class="features section">
                                          <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                                            <ul>
                                              <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Graduates from recognized universities who have a good MSc degree or meet the requirements to transfer from MPhil to DPhil studies in relevant disciplines The mode of study is by research.
                                              </span></li>
                                          
                                            </ul>
                                          </div>
                                        </div>
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
                      <br>
                      {{-- <h5>The Academic Flow for Masters</h5>
                      <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/academic_flow.png" class="img-fluid" alt="masters academic flow"> </div>
                      <h5>The Academic Flow for PhD</h5>
                      <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/phd_flow.png" class="img-fluid" alt="phd academic flow"> </div>
                      <h5>The Academic Flow for Staff Exchange</h5>
                      <div class="pb-4" style="text-align: center; vertical-align: middle; border: 0;"><img src="main/assets/img/staff_exchange.png" class="img-fluid" alt="staff exchange"> </div> --}}
                      
                      
                                       

                    </div><!-- End Portfolio Item -->
                    <hr>
                    <div class="portfolio-item isotope-item filter-repairs" id="selection">
                      <h5><strong>Application and Selection Process </strong></h5>
                      <p style="text-align:justify;">The program guarantees an impartial and transparent selection and admission process based on merit, and equal opportunities as well as maintaining standards. Applications will be subjected to an external review process to avoid bias and ensure that the based candidates are selected. The following are guidelines for a successful application:</p>
                      <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                          <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Interested candidates can only apply to approved specified programs in the appropriate university as indicated in the mobility flow.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Applicants should ensure that they meet the admission requirements for the program/university in the mobility flow.</span></li>
                            <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Each application MUST be accompanied by a detailed concept note (three pages) including the title of the proposed work, problem statement, methodology, work plan. All proposed work must be in the area of inclusive (ideas on how to benefit society, women and other marginalized groups including persons living with disabilities) homegrown clean energy.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Applicants must have a minimum of second-class honours (lower division) at first degree level.</span></li>
                            <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Applicants should provide information on academic background, and work experiences related to climate change and clean energy.</span></li>
                            <li style="text-align:justify;"><i class="bi bi-check2-all"></i> <span>Information on how participation in this program will benefit the applicant, and other stakeholders in the home country, Africa and the world.</span></li>
                          
                          </ul>
                        </div>
                      </div>  
                      <p>To apply, send your CV and a 3 page proposal documents to <a href="mailto:hce.solutions@futminna.edu.ng">hce.solutions@futminna.edu.ng</a></p>

                    </div><!-- End Portfolio Item -->
        
        
                </div>
        
              </div>
        
            </section><!-- /Projects Section -->   
            @include('layouts.faq_javafile')
  </main>

  @endsection