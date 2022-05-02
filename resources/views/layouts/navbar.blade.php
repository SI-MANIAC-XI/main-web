<nav class="navbar navbar-expand-lg navbar-light myNavbar">
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
            <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('competition') ? ' active' : '' }}" href="/competition">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('faq') ? ' active' : '' }}" href="/faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="/contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>