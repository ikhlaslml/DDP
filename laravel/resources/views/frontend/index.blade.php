@extends('frontend.app')
  
   <main class="main">

    <!-- Hero Section as Carousel -->
    <section id="hero" class="hero section">
      <div class="container-fluid px-0 hero-swiper swiper">
        <div class="swiper-wrapper">

          <!-- Slide 1 -->
          <div class="swiper-slide">
            <img src="{{ asset('img/baner1.jpg')}}" class="img-fluid w-100" alt="Banner Slide 1">
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img src="{{ asset('img/banner2.png')}}" class="img-fluid w-100" alt="Banner Slide 2">
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <img src="{{ asset('img/banner3.png')}}" class="img-fluid w-100" alt="Banner Slide 3">
          </div>

        </div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination mt-3"></div>
      </div>
    </section>
    
    <!-- Statistics Cards Carousel -->
    <section id="statistics" class="stats-carousel-container">
      <h2 id="team-title" class="section-title">Capaian Pendataan</h2>

      <div class="swiper stats-swiper">
        <div class="swiper-wrapper">

          <!-- Setiap stat-card jadi swiper-slide -->
          <div class="swiper-slide">
            <article class="stat-card" aria-labelledby="stat-desa">
              <span class="material-icons icon-building">corporate_fare</span>
              <p class="stat-description" id="stat-desa">Jumlah Desa</p>
              <p class="stat-number">460</p>
              <div class="stat-decoration-red"></div>
              <div class="stat-decoration-navy"></div>
            </article>
          </div>

           <div class="swiper-slide">
            <article class="stat-card" aria-labelledby="stat-dusun">
              <span class="material-icons icon-building">corporate_fare</span>
              <p class="stat-description" id="stat-dusun">Jumlah Dusun</p>
              <p class="stat-number">3.518</p>
              <div class="stat-decoration-red"></div>
              <div class="stat-decoration-navy"></div>
            </article>
           </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-rw">
            <span class="material-icons icon-building">corporate_fare</span>
            <p class="stat-description" id="stat-rw">Jumlah RW</p>
            <p class="stat-number">3.291</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-rw">
            <span class="material-icons icon-building">location_city</span>
            <p class="stat-description" id="stat-rw">Jumlah Kelurahan</p>
            <p class="stat-number">62</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-bangunan">
            <span class="material-icons icon-building">location_city</span>
            <p class="stat-description" id="stat-bangunan">Jumlah Bangunan</p>
            <p class="stat-number">284.421</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-bangunan" >
            <span class="material-icons icon-building">location_city</span>
            <p class="stat-description" id="stat-bangunan">Jumlah KK</p>
            <p class="stat-number">350.492</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-jiwa">
            <span class="material-icons icon-building">groups</span>
            <p class="stat-description" id="stat-jiwa">Jumlah Jiwa</p>
            <p class="stat-number">1.212.038</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-laki">
            <span class="material-icons icon-building" >groups</span>
            <p class="stat-description" id="stat-laki">Jumlah Laki-Laki</p>
            <p class="stat-number">612.111</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="stat-card" aria-labelledby="stat-perempuan">
            <span class="material-icons icon-building">groups</span>
            <p class="stat-description" id="stat-perempuan">Jumlah Perempuan</p>
            <p class="stat-number">599.927</p>
            <div class="stat-decoration-red"></div>
            <div class="stat-decoration-navy"></div>
          </article>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Partners logos -->
     <section class="partners-section-container container" aria-label="Partner logos">
      <h2 id="team-title" class="section-title">Mitra Kami</h2>
      <div class="partners-marquee">
        <div class="partners-logos" role="list">
         @foreach($mitras as $mitra)
        <!-- Partner 1 -->
        <div class="partner-item" role="listitem">
          <img src="{{ asset('storage/'.$mitra->gambar) }}" alt="Logo Kolaka Utara" class="partner-logo" />
          <p class="partner-description">{{ $mitra->nama_mitra }}</p>
        </div>

         @endforeach
        
      </div>
    </section>
    

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: justify;">"Data Desa Presisi sebagai Basis untuk Membangun Big Data Indonesia".</p>
              <p style="text-align: justify;">Yang memiliki tingkat akurasi & ketepatan tinggi untuk memberikan gambaran kondisi aktual desa/kelurahan yang sesungguhnya. Data ini diambil, divalidasi, & diverifikasi oleh warga desa dibantu oleh pihak luar desa (Perguruan Tinggi) dengan biaya yang relatif murah.</p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="text-align: justify;">Pendekatkan inklusi yang menempatkan relasi antara manusia dan teknologi untuk melakukan pengumpulan data
              desa presisi dengan mempertimbangkan dimensi spasial, teknologi digital, partisipasi warga dan sensus.</p>
            <a href="about.html" class="read-more"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>App Merdesa</h2>
        </div><!-- End Section Title -->

      <div class="container">
        <p style="text-align: justify;">DDP menyediakan beberapa aplikasi yang mendukung tersedianya data dasar desa dengan akurat by name, by adress, by coordinate  serta dihasilkan dari proses yang partisipatif sehingga dapat memotret kondisi wilayah secara valid dan aktual.</p>

        <div class="row gy-5">

          <div class="col-xl-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('img/DDPApps.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-xl-7 d-flex" data-aos="fade-up" data-aos-delay="200">

            <div class="row align-self-center gy-5">

              <div class="col-md-6 icon-box">
                <img src="{{ asset('img/apps/logo-sensus.png')}}" class="feature-icon" alt="Merdesa Sensus Icon">
                <div>
                  <h4>Merdesa Sensus</h4>
                  <p style="text-align: justify;">Aplikasi yang digunakan untuk sensus keluarga secara partisipatif dan terintegrasi dengan data spasial.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <img src="{{ asset('img/apps/logo-maps.png')}}" class="feature-icon" alt="Merdesa Maps Icon">
                <div>
                  <h4>Merdesa Maps</h4>
                  <p style="text-align: justify;">Aplikasi pendataan sarana-prasarana dan vegetasi.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <img src="{{ asset('img/apps/logo-monev.png')}}" class="feature-icon" alt="Merdesa Monev Icon">
                <div>
                  <h4>Merdesa Monev</h4>
                  <p style="text-align: justify;">Aplikasi monitoring dan evaluasi hasil sensus keluarga pada saat pendataan berlangsung.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <img src="{{ asset('img/apps/logo-webgis.png')}}" class="feature-icon" alt="Merdesa Webgis Icon">
                <div>
                  <h4>Merdesa Webgis</h4>
                  <p style="text-align: justify;">Portal sistem informasi geografis dan dashboard analisis yang menyajikan hasil dari pendataan. Dapat digunakan oleh perangkat desa maupun pemangku kebijakan untuk melihat capaian pembangunan desa/kelurahan secara transparan baik dari aspek fisik maupun non-fisik.</p>
                </div>
              </div>
              <!-- End Feature Item -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Features Section -->


    <!-- Monografi Data Desa Presisi -->
    <section class="container" aria-label="Monografi Data Desa Presisi">
      <div class="section-header-with-link">
        <h2 class="section-title">Monografi</h2>
        <a href="halamanmonografi.html" class="see-more-link" aria-label="Lihat Monografi Lainnya">
          Lihat Monografi Lainnya
          <span class="material-icons" aria-hidden="true">arrow_forward</span>
        </a>
      </div>
      <p style="text-align: justify;">
        Buku Monografi Data Desa Presisi ditulis berdasarkan enam aspek kesejahteraan rakyat (kesra) sebagai wujud amanat dari Undang-Undang Dasar 1945. Keenam aspek kesra yang disusun, yaitu demografi, sandang pangan air papan, pendidikan dan kebudayaan, kesehatan, pekerjaan dan dunia usaha, sosial, hukum dan HAM, infrastruktur dan lingkungan hidup. Buku ini berupaya untuk dikemas sebagai salah satu dasar perencanaan dan implementasi pembangunan di Desa/Kelurahan.
      </p>
     
      <div class="monografi-list" tabindex="0" aria-label="List buku monografi data desa presisi">
          @foreach($monografis as $monografi)
        <article tabindex="0" aria-label="Buku Monografi Desa Mekarsari">
          <div class="frame" style="background-image: url('{{asset('img/frame/FrameMonografi.png')}}');">
            <img class="monografi-cover" src="{{ asset('storage/'.$monografi->gambar) }}" alt="">
          </div>
        </article>
         @endforeach
      </div>
    </section>
    <!-- End Monografi Data Desa Presisi -->

<!-- Infografis -->
    <section class="container" aria-label="Infografis Data Desa Presisi">
      <div class="section-header-with-link">
        <h2 class="section-title">Infografis</h2>
        <a href="listinfografis.html" class="see-more-link" aria-label="Lihat Infografis Lainnya">
          Lihat Infografis Lainnya
          <span class="material-icons" aria-hidden="true">arrow_forward</span>
        </a>
      </div>

      <p style="text-align: justify;">
        Infografis Data Desa Presisi dibuat untuk mempresentasi visual dari data, gagasan, informasi, atau pengetahuan yang disajikan melalui bagan, grafik, jadwal, dan elemen visual lainnya,
        bertujuan untuk menyederhanakan dan meningkatkan pemahaman informasi yang telah dikumpulkan oleh Data Desa Presisi.
      </p>

      <!-- Container Grid -->
       <div class="infografis-grid">
        @foreach ($infos as $infografis)
            <article class="infografis-card">
                <div class="swiper infografis-swiper">
                    <div class="swiper-wrapper">
                        @php
                            $gambarArray = json_decode($infografis->gambar, true);
                        @endphp

                        @if ($gambarArray && is_array($gambarArray))
                            @foreach ($gambarArray as $gambar)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $gambar) }}" class="img-fluid rounded shadow" alt="Infografis">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <span>Tidak ada gambar</span>
                            </div>
                        @endif
                    </div>

                    <!-- Navigasi tombol panah -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </article>
        @endforeach
    </div>
      </div>
    </section>
    <!-- End Infografis -->

      <!-- Berita Terbaru -->
    <section class="container latest-news-section" aria-label="Berita Terbaru">
      <div class="section-header-with-link">
        <h2 class="section-title">Berita Terbaru</h2>
      </div>

      <div class="latest-news">
        <!-- KIRI: 3 BERITA UTAMA -->
        <div class="main-news-list">
           @foreach($beritas as $berita)
          <article class="main-news">
            <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Berita 1">
            <div class="main-news-content">
              <h3 class="main-news-title">{{ $berita->judul_artikel }}</h3>
              <p class="main-news-description">{{ $berita->readmore }}</p>
              <a href="https://tehrimpang.online/isiberita.html" class="btn-read-more">Baca Selengkapnya</a>
            </div>
          </article>
           @endforeach

         
        </div>

        <!-- KANAN: 4 BERITA LAIN (2x2) -->
        <div class="other-news-container">
          <div class="section-header-with-link">
            <h2 class="section-title" aria-hidden="true">Berita Lainnya</h2>
            <a href="listberita.html" class="see-more-link">
              Lihat Berita Lainnya <span class="material-icons">arrow_forward</span>
            </a>
          </div>

          <div class="other-news-list">
            @foreach ($beritalain as $berita)
            <article class="other-news-card">
              <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Berita Lain 1">
              <div class="other-news-content">
                <h3 class="other-news-title">{{ $berita->judul_artikel }}</h3>
                <p class="other-news-description">{{ $berita->readmore }}</p>
                <time class="other-news-date">Feb 10, 2023</time>
              </div>
            </article>
             @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End Berita -->

    <!-- Gallery Section -->
    <section class="gallery section light-background" aria-label="Testimoni">
      <div class="container">
        <section id="gallery" >
      <div class="section-header-with-link">
        <h2 class="section-title" data-aos="fade-up">Galeri</h2>
        <a href="https://tehrimpang.online/galeri_page.html" class="see-more-link" aria-label="Lihat Monografi Lainnya">
          Lihat Galeri Lainnya
          <span class="material-icons" aria-hidden="true">arrow_forward</span>
        </a>
      </div>
      <p style="text-align: justify;">Inisiatif Data Desa Presisi adalah upaya bersama menuju perencanaan berbasis data yang akurat dan menyeluruh. Galeri ini menampilkan dinamika kegiatan kami bersama masyarakat desa. Dari desa, oleh desa, untuk masa depan desa.</p>
      <!-- End Section Title -->

        <!-- Modern Auto-Sliding Gallery -->
        <div class="gallery-container" data-aos="fade-up" data-aos-delay="100">
          <div class="gallery-slide">
            <!-- Slide 1 -->
            <div class="slide">
              @foreach ($gambars as $gambar)
              <img src="{{ asset('storage/' . $gambar->gambar) }}" alt="Gallery 1">
              <div class="slide-content">
                <h2 class="slide-title">Kegiatan Musyawarah</h2>
                <p class="slide-desc">Warga bersama tim DDP melakukan musyawarah untuk menyepakati data yang dikumpulkan.</p>
              </div>
              @endforeach
            </div>

          </div>

          <!-- Controls -->
          <div class="gallery-controls">
            <button class="control-btn prev-btn">❮</button>
            <button class="control-btn next-btn">❯</button>
          </div>

        </div>
      </div>
    </section>
    <!-- End Gallery Section --->


    <!-- Testimonials Section -->
     <section class="testimonials section light-background" aria-label="Testimoni">
      <div class="container">
        <section id="testimonials" >
      <div class="section-header-with-link">
        <h2 class="section-title" data-aos="fade-up">Testimoni</h2>
        <a href="testimoni_page.html" class="see-more-link" aria-label="Lihat Monografi Lainnya">
          Lihat Testimoni Lainnya
          <span class="material-icons" aria-hidden="true">arrow_forward</span>
        </a>
      </div>
      <p style="text-align: justify;">Berikut ini adalah pengalaman langsung dari masyarakat dan para pemangku kepentingan yang telah merasakan manfaat nyata dari Program Data Desa Presisi (DDP).</p>
      <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                @foreach ($testimonis as $testimoni)
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('storage/' . $testimoni->gambar) }}" class="testimonial-img" alt="">
                    <h3>Dr. Drs. Akmal Malik, M.Si</h3>
                    <h4>Direktorat Jenderal Otonomi Daerah Kementerian Dalam Negeri RI</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>“Ini bukan hanya tentang angka, tetapi tentang membangun hubungan yang lebih dekat dan penuh kepercayaan antara pemerintah dan masyarakat.”</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
                 @endforeach
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination mt-3"></div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- /Testimonials Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <a href="https://maps.app.goo.gl/jeEjVusSd1vCc8tSA"><p>Jl. Bungur No.3, RT.2/RW.6, Babakan, Kec. Dramaga, Kabupaten Bogor, Jawa Barat</p></a>
                </div>
              </div><!-- End Info Item -->

             <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-whatsapp"></i>
                  <a href="https://wa.me/081356566546"><h3>WhatsApp</h3></a> 
                  <a href="https://wa.me/081356566546"><p>+62 8135 6566 546</p></a>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <a href="mailto:datadesapresisi@gmail.com"><p>datadesapresisi@gmail.com</p></a>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Judul Pesan" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Isi Pesan" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Tunggu</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda Sudah Dikirim, Terimakasih!</div>
                  <button type="submit" a href="mailto:datadesapresisi@gmail.com">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>