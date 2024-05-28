@extends('layouts.master')

@section('title', 'workshops & training: HCE')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade"
        style="background-image: url({{asset('main/assets/img/project-bg.jpg')}});">
        <div class="container position-relative">
            <h1>Workshops Training</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href=" {{ route('home') }} ">Home</a></li>
                    <li class="current">Workshops Training</li>
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
            <h2>Workshops and Trainings</h2>
            <p>The HCE Solutions project offers a comprehensive training program designed to support the development and
                commercialization of clean energy solutions in Africa. The program consists of three work packages that
                cater to:</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">

                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Building entrepreneurship skills for clean
                                        energy businesses</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Facilitating knowledge exchange and
                                        curriculum development on clean energy</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Promoting gender equality and social
                                        inclusion in clean energy initiatives</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Promotion of clean energy including
                                        Artificial Intelligence algorithms</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End Service Item -->
            <br>

            <div data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h3>Target Audience</h3>
                    <div class="features section">
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">

                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>High School Students</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>University students and staff</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Clean energy entrepreneurs </span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Researchers and professionals in the clean
                                        energy sector</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Policymakers and stakeholders interested in
                                        clean energy development</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End Service Item -->
            <br>

            <div data-aos="fade-up" data-aos-delay="200" style="padding-bottom: 30px">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
                    </div>

                    <h3>Types of Training</h3>
                    <div class="features section">
                        <h5><strong>Work Package 1: Entrepreneurship Skills Development</strong></h5>
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Develop Alternative Energy Solutions (focus
                                        on hands-on prototype development)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Enhance Entrepreneurial Skills (business idea
                                        development, startup incubation)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Commercialize Solutions (startup registration
                                        and rollout)
                                    </span></li>
                            </ul>
                        </div>

                        <h5><strong>Work Package 2: Knowledge Exchange and Curriculum Development</strong></h5>
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Exchange Program (facilitates student and
                                        staff exchange between institutions)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Research and Training (seminars and workshops
                                        on clean energy and climate change)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Curriculum Development (review and develop
                                        curriculum for clean energy education)
                                    </span></li>
                            </ul>
                        </div>

                        <h5><strong>Work Package 3: Gender Equality and Social Inclusion</strong></h5>
                        <div class=" tab-pane fade active show" id="features-tab-1" role="tabpanel">
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Conduct a Gender and Inclusion Baseline Study
                                        (identify areas for improvement in gender equality and social inclusion within
                                        participating institutions)</span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End Service Item -->

        </div>

    </section>
</main>

@endsection