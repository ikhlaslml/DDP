<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Artikel Data Desa Presisi</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicons -->
  <link href="{{ asset('img/logo-banner2.png')}}" rel="icon">
  <link href="{{ asset('apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap & AOS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.cs')}}s" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- Style Umum (Bootstrap + Main) -->
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">

  <!-- Style khusus halaman artikel -->
  <link href="{{ asset('css/jurnal.css')}}" rel="stylesheet">

  <link href="{{ asset('css/buku.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">
        @include('frontend.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('frontend.topbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


  <footer id="footer" class="footer">


    <div class="container footer-top">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 footer-about">

          <a href="index.html" class="d-flex align-items-center">

            <img src="{{ asset('img/logo-ddp.png')}}" alt="Logo">

          </a>



          <div class="footer-contact pt-3">

            <img src="{{ asset('img/LogoFema.png')}}" alt="Logo">

          </div>

        </div>



        <div class="col-lg-2 col-md-3 footer-links">

          <h4>Mobile Apps</h4>

          <ul>

            <li><i class="bi bi-chevron-right"></i> <a href="https://webgis.desapresisi.id/account/login">WebGIS DDP</a></li>

            <li><i class="bi bi-chevron-right"></i> <a href="https://play.google.com/store/apps/details?id=id.desapresisi.merdesasensus&hl=id">Merdesa Sensus</a></li>

            <li><i class="bi bi-chevron-right"></i> <a href="https://play.google.com/store/apps/details?id=id.desapresisi.merdesamaps&hl=id">Merdesa Maps</a></li>

            <li><i class="bi bi-chevron-right"></i> <a href="https://monev.desapresisi.id/signin">Monev DDP</a></li>

          </ul>

        </div>



        <div class="col-lg-2 col-md-3 footer-links">

          <h4>Product</h4>

          <ul>

            <li><i class="bi bi-chevron-right"></i> <a href="#">Berita</a></li>

            <li><i class="bi bi-chevron-right"></i> <a href="#">Monografi</a></li>

            <li><i class="bi bi-chevron-right"></i> <a href="#">Infografis</a></li>

          </ul>

        </div>



        <div class="col-lg-4 col-md-12">

          <h4>Follow Us</h4>

          <p>Untuk mendapatkan informasi terkini terkait Data Desa Presisi</p>

          <div class="social-links d-flex">

            <a href="https://www.instagram.com/desapresisi.ipb?utm_source=ig_web_button_share_sheet&igsh=NXUwd2VodmlmNjQ4"><i class="bi bi-instagram"></i></a>

            <a href="https://wa.me/081356566546"><i class="bi bi-whatsapp"></i></a>

            <a href="https://www.youtube.com/@desapresisiipbofficial9102"><i class="bi bi-youtube"></i></a>

            <a href="https://www.tiktok.com/@data.desapresisi?is_from_webapp=1&sender_device=pc"><i class="bi bi-tiktok"></i></a>

            <a href="https://www.facebook.com/Unitdesapresisi?locale=id_ID"><i class="bi bi-facebook"></i></a>

          </div>

        </div>



      </div>

    </div>



    <div class="container copyright text-center mt-4">

      <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">Official Data Desa Presisi.</strong> <span>All Rights Reserved</span></p>

      <div class="credits">

        <!-- All the links in the footer should remain intact. -->

        <!-- You can delete the links only if you've purchased the pro version. -->

        <!-- Licensing information: https://bootstrapmade.com/license/ -->

        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

        <a href="">Solusi Satu Data Indonesia!</a>

      </div>

    </div>



  </footer>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

  <!-- Script artikel -->
  <script src="{{ asset('assets/js/jurnal.js"></script>


  <script>
    fetch("header.html").then(res => res.text()).then(data => {
      document.getElementById("header-placeholder").innerHTML = data;
    });
    fetch("footer.html").then(res => res.text()).then(data => {
      document.getElementById("footer-placeholder").innerHTML = data;
    });
  </script>

</body>

</html>
