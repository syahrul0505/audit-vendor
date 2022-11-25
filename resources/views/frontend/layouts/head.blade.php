<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/yakesma.png') }}" alt="" >
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ set_active('home') }}" href="{{ route('home') }}">Beranda</a></li>
          <li><a class="nav-link scrollto {{ set_active('tentang-kami') }}" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
          <li><a class="nav-link scrollto {{ set_active('program') }}" href="{{ route('program') }}">Program</a></li>
          <li><a class="nav-link scrollto {{ set_active('artikel') }}" href="{{ route('artikel') }}">Artikel</a></li>
          <li><a class="nav-link scrollto {{ set_active('rekening') }}" href="{{ route('rekening') }}">Rekening</a></li>
          <li><a class="nav-link scrollto {{ set_active('not-login') }}" href="{{ route('not-login') }}">Kontak</a></li>
          <li><a class="nav-link scrollto {{ set_active('blog') }}" href="{{ route('blog') }}">Download</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle align-content-end"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->