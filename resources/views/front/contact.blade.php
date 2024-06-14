@extends('layouts.master')

@section('title', 'Contact: HCE')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{asset('main/assets/img/contact-bg.jpg')}});">
        <div class="container position-relative">
          <h1>Contacts</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href=" {{ route('home') }} ">Home</a></li>
              <li class="current">Contacts</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" style="padding-top: 40px">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Main Campus, Gidan-Kwano, Bida Road, Minna, Niger State, Nigeria</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+234 8033945009</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>hce.solutions@futminna.edu.ng</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe width="523" height="403" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=523&amp;height=403&amp;hl=en&amp;q=Federal%20University%20of%20Technology%20Minna%20+(Homegrown%20Clean%20Energy)&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href='https://google-map-generator.com/'></a>

          </div><!-- End Google Maps -->
          <div class="col-lg-6">
            <form action="{{ route('contact.store') }}" method="post">
              @csrf
              <div class="row gy-4">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>

                <div class="col-md-6 ">
                  <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="col-md-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}"required>
                  @if ($errors->has('subject'))
                      <span class="text-danger" >{{ $errors->first('subject') }}</span>
                  @endif
                </div>

                <div class="col-md-12">
                  <textarea name="message" rows="3" class="form-control" required>{{ old('message') }}</textarea>
                  @if ($errors->has('message'))
                      <span class="text-danger">{{ $errors->first('message') }}</span>
                  @endif
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-outline-primary">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>



@endsection