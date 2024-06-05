<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('main/assets/img/logo.png') }}" alt="">
        <h1 class="sitename">HCE</h1> <span>.</span>
      </a>
      <a href="/" class="logo d-flex align-items-left">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('main/assets/img/eu_logo.jpg') }}" alt="">
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ Request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li class="dropdown"><a href="#" class="{{ Request()->is('about', 'outcomes') ? 'active' : '' }}"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('about') }}">About HCE</a></li>
              <li><a href="{{ route('outcomes') }} ">Expected Outcomes</a></li>
              <li><a href="{{ route('c_development') }} ">Capacity Development</a></li>
              <li><a href="{{ route('partnership') }} ">Partnerships</a></li>
              
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ Request()->is('activities', 'achievements', 'impacts', 'workshops_training') ? 'active' : '' }}"><span>Projects</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('activities') }} ">Activites</a></li>
              <li><a href="{{ route('achievements') }}">Achievements</a></li>
              <li><a href="{{ route('impacts') }}">Impacts</a></li>
              <li><a href="{{ route('workshops_training') }}">Workshops & Training</a></li>
            </ul>
          </li>  
          <li><a href="{{ route('news') }} " class="{{ Request()->is('news') ? 'active' : '' }}">News</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="{{ route('scholarship') }} " class="{{ Request()->is('scholarship') ? 'active' : '' }}">Scholarships</a></li>
          <!-- <li class="dropdown"><a href="#" class="{{ Request()->is('opportunities', 'scholarship') ? 'active' : '' }}"><span>Opportunities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('career') }} ">Career</a></li>
              <li><a href="{{ route('scholarship') }}">Scholarships</a></li>
            </ul>
          </li>  -->
          <li><a href="{{ route('contact') }} " class="{{ Request()->is('contact') ? 'active' : '' }}">Contact</a></li>
          <li><a href="{{ route('faq') }} " class="{{ Request()->is('faq') ? 'active' : '' }}">FAQ</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
