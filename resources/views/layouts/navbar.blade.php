<nav class="navbar navbar-expand-lg navbar-light myNavbar fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <div class="brand-img">
            <img src="{{ asset('../mainweb/img/logo/logo-ubaya.png') }}" alt="Logo Ubaya">
        </div>
        <div class="brand-img">
            <img src="{{ asset('../mainweb/img/logo/logo-maniac.png') }}" alt="Logo MANIAC">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ url('/about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('competition') ? ' active' : '' }}" href="{{ url('/competition') }}">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('faq') ? ' active' : '' }}" href="{{ url('/faq') }}">FAQ</a>
          </li>
          @auth
          @if(auth()->user()->is_admin == "0")
          <li class="nav-item">
            <a class="nav-link{{ request()->is('dashboard/'.auth()->user()->id) ? ' active' : '' }}" href="{{ url('dashboard/'.auth()->user()->id) }}">Your Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('workshop') ? ' active' : '' }}" href="{{ url('workshop') }}">Workshops</a>
          </li>
          @endif
          @endauth
          <li class="nav-item dropdown">
            @auth
            @if (auth()->check())
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome {{ auth()->user()->username }}</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if (auth()->user()->is_admin >= "1")
                <li>
                  <a class="dropdown-item" href="{{ url('/dashboardadmin') }}">Dashboard</a> 
                </li>  
                @endif
                <li>
                  <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"> Logout</button>
                  </form>  
                </li>
              </ul>
            @endauth
            @else
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                <li><a class="dropdown-item" href="{{ url('/register')}}">Register</a></li>
              </ul>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>