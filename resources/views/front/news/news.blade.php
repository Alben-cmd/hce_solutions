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
            <li class="current">News</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alt Services Section -->
            <!-- Section Title -->
        
    <section id="alt-services" class="alt-services section">
        <div class="container section-title" data-aos="fade-up">
            <!-- <h2>Services</h2> -->
            <br>
            <p> <em> <strong>Coming Soon !!!</strong></em></p><br>
          </div><!-- End Section Title -->
    </section>
  </main>

  @endsection