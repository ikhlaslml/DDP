<header id="header" class="header d-flex align-items-center fixed-top">
    

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

  

      <!-- Logo -->

      <a href="index.html" class="logo d-flex align-items-center"> 

        <img src="{{ asset('img/logo-ddp.png')}}" alt="Logo">

      </a>

  

      <!-- Nav Menu -->

      <nav id="navmenu" class="navmenu">

        <ul>

          <li><a href="https://tehrimpang.org/">Home</a></li>

          <li><a href="{{ route('about.index') }}">About</a></li>

          <li><a href="https://tehrimpang.org/#features">Features</a></li>

          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

            <ul>

              <li class="dropdown"><a href="#"><span>Buku</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <ul>

                  <li><a href="{{ route('datadesapresisi.index') }}">Data Desa Presisi</a></li>

                  <li><a href="{{ route('Monografis.index') }}">Monografi</a></li>

                </ul>
                
              </li>

              <li><a href="{{ route('Jurnal.index') }}">Jurnal</a></li>

              <li><a href="{{ route('opini.index') }}">Opini</a></li>

              <li><a href="{{ route('Berita.index') }}">Berita</a></li>

              <li><a href="{{ route('Infografis.index') }}">Infografis DDP</a></li>

              <li><a href="https://webgis.desapresisi.id/account/login">WebGIS DDP</a></li>

              <li><a href="https://play.google.com/store/apps/details?id=id.desapresisi.merdesasensus&hl=id">Merdesa Sensus</a></li>

              <li><a href="https://play.google.com/store/apps/details?id=id.desapresisi.merdesamaps&hl=id">Merdesa Maps</a></li>

              <li><a href="https://monev.desapresisi.id/signin">Monev DDP</a></li>

            </ul>

          </li>

          <li><a href="{{ route('Galeri.index') }}">Gallery</a></li>

          <li><a href="index.html#contact">Contact</a></li>

        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

      </nav>

      <!-- <a class="btn-getstarted" href="index.html#about">Get Started</a> -->

    </div>

  </header>