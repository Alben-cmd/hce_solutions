@extends('layouts.master')

@section('title', 'News: HCE')

@section('content')

<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/news-bg.jpg')}});">
      <div class="container position-relative">
        <h1>News</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href=" {{ route('home') }} ">Home</a></li>
            <li><a href=" {{ route('news') }} ">News</a></li>
            <li class="current">Orientation Programme</li>
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
                            <h3 class="title">Upcoming Orientation Programme: Promoting Inclusive Homegrown Clean Energy Solutions for Climate Change Adaptation and Mitigation in Africa (HCE-Solutions)</h3>

                            <div class="meta-top">
                                <ul>
                                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">HCE-Solutions</a></li>
                                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">December 10th, 2024</time></a></li>
                                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt-fill"></i> <a href="blog-details.html">Virtual</a></li>
                                </ul>
                              </div><!-- End meta top -->
          
                          <div class="content">
                            <p style="text-align:justify;">
                                We are pleased to announce the upcoming virtual Postgraduate Students Orientation Programme. This orientation marks the beginning of a comprehensive research program focused on promoting inclusive homegrown clean energy solutions for climate change adaptation and mitigation in Africa.
                            </p>
                            <p style="text-align:justify;">
                                The HCE-Solutions program aims to bring together postgraduate students from diverse backgrounds to explore innovative solutions to Africa&#39;s energy challenges. Through this program, students will have the opportunity to engage with leading experts in the field, develop their research skills, and contribute to the development of sustainable energy solutions for Africa.
                            </p>
                            <p style="text-align:justify;">
                                The virtual orientation programme will provide students with an overview of the program&#39;s objectives, structure, and expectations. It will also offer a platform for students to meet with the program coordinators, ask questions, and network with their peers.
                            </p>
                            <h3>Details of the Orientation Programme:</h3>
                            <p><strong>Date:</strong> December 10th, 2024</p>
                            <p ><strong>Time:</strong> 9am</p>
                            <p class="pb-1"><strong>Target Audience:</strong> Postgraduate Students enrolled in the HCE-Solutions program</p>

                            <p><em><strong>We look forward to welcoming our new cohort of students and exploring the exciting possibilities of promoting inclusive homegrown clean energy solutions for Africa.</strong></em></p>
                            
                            
                          </div><!-- End post content -->    
                                
                        </article>
                       
                </div>
              </div>
              
  </main>

  @endsection