@extends('about.app')

<body class="bg-white text-gray-800 font-sans leading-relaxed scroll-smooth">

  <!-- Hero section with component slider -->
  <section class="bg-white relative max-w-7xl mx-auto mt-6 px-6 sm:px-8 lg:px-12">
    <div class="overflow-hidden rounded-lg shadow-lg relative">
      <div class="relative h-64 sm:h-80 md:h-96">
        <div class="slider-container no-scrollbar flex h-full overflow-x-auto snap-x snap-mandatory">
          <!-- Slide 1 -->
          <div class="snap-center flex-shrink-0 relative w-full md:w-3/4 lg:w-full h-full select-none">
            <img src="{{ asset('img/FotoSejarahDDP/Gambar21.jpeg')}}" alt="DDP 1" class="object-cover w-full h-full brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/30 via-black/20 to-transparent pointer-events-none"></div>
            <div class="absolute top-1/2 left-10 md:left-20 transform -translate-y-1/2 bg-[rgba(255,255,255,0.7)] p-6 rounded-lg max-w-md shadow-lg">
              <h1 class="text-3xl font-semibold mb-2 text-deep-navy-900">Cerita Kami</h1>
              <p class="text-gray-700 text-sm">Data Desa Presisi lahir dari kegelisahan terhadap ketimpangan data desa. 
                Sejak 2014, kami memulai dengan pemetaan berbasis drone bersama warga, bukan sekadar proyek, 
                tapi gerakan ilmiah partisipatif dari desa.
              </p>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="snap-center flex-shrink-0 relative w-full md:w-3/4 lg:w-full h-full select-none">
            <img src="{{ asset('img/ddpbanner.png')}}" alt="DDP2" class="object-cover w-full h-full brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/30 via-black/20 to-transparent pointer-events-none"></div>
            <div class="absolute top-1/2 right-10 md:right-20 transform -translate-y-1/2 bg-[rgba(255,255,255,0.7)] p-6 rounded-lg max-w-md shadow-lg">
              <h1 class="text-3xl font-semibold mb-2 text-deep-navy-900">Perjalanan Kami</h1>
              <p class="text-gray-700 text-sm">Dimulai dari riset kawasan perdesaan IPB University dan seruan “Harus dimulai semenjak 
                di desa!”, DDP membangun ekosistem kolaboratif antara warga, kampus, dan teknologi demi keadilan pembangunan.
              </p>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="snap-center flex-shrink-0 relative w-full md:w-3/4 lg:w-full h-full select-none">
            <img src="{{ asset('img/FotoSejarahDDP/Gambar23.jpeg')}}" alt="Blackmores Laboratory" class="object-cover w-full h-full brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-black/30 via-black/20 to-transparent pointer-events-none"></div>
            <div class="absolute top-1/2 left-10 md:left-20 transform -translate-y-1/2 bg-[rgba(255,255,255,0.7)] p-6 rounded-lg max-w-md shadow-lg">
              <h1 class="text-3xl font-semibold mb-2 text-deep-navy-900">Fokus Kami</h1>
              <p class="text-gray-700 text-sm">Kami fokus pada pengembangan metode pemetaan spasial-sosial yang presisi.
                 Melalui Sekolah Drone Desa, Sensus Digital, dan FGD, warga dilibatkan sebagai produsen pengetahuan desa mereka 
                 sendiri.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <main class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-10 space-y-20">

  <!-- Tentang Data Desa Presisi -->
  <section class="bg-white grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-6 sm:px-12 py-10">
    <!-- Slider images -->
    <div class="rounded-xl shadow-xl overflow-hidden relative">
    <!-- Ubah tinggi slider di sini: dari h-64 menjadi h-96 atau custom -->
      <div class="slider-container no-scrollbar flex overflow-x-auto snap-x snap-mandatory h-[28rem]">
        <img src="{{ asset('img/foto_gallery/12.jpg')}}" alt="Diskusi Warga DDP" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/19.jpg')}}" alt="Pelatihan Pemetaan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/8.jpg')}}" alt="Kegiatan FGD" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/1.jpg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/16.jpg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/18.jpg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/foto_gallery/5.jpg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
      </div>
      <div class="absolute bottom-2 right-3 bg-black bg-opacity-50 text-white px-3 py-0.5 rounded text-xs font-semibold select-none shadow">1 / 3</div>
    </div>

    <!-- Text -->
    <div>
      <h2 class="text-2xl font-bold mb-4 text-deep-navy-600">Tentang Data Desa Presisi</h2>
      <p style="text-align: justify;">
        <strong>Data Desa Presisi</strong> (DDP) sebagai <strong>inovasi</strong> dari IPB University, berupaya menjawab 
        akar masalah utama sekaligus sebagai pijakan dalam <strong>pembangunan pedesaan</strong>. 
        DDP adalah data yang memiliki <strong>tingkat akurasi</strong> dan <strong>ketepatan tinggi</strong> 
        untuk memberikan gambaran <strong>kondisi aktual desa</strong>. Data ini <strong>diambil</strong>, <strong>diverifkasi</strong>, 
        dan <strong>divalidasi</strong> oleh <strong>warga desa</strong>, dengan dibantu oleh pihak luar desa seperti 
        perguruan tinggi (Sjaf et al., 2020).
      </p>
      <p style="text-align: justify;">
        Inovasi metodologi DDP telah mendapat <strong>rekognisi ilmiah internasional</strong> melalui 
        <strong>jurnal MethodsX (Q2)</strong>, serta <strong>tercatat sebagai Kekayaan Intelektual</strong> dengan 
        <strong>Nomor 000588704</strong>. DDP juga ditetapkan sebagai salah satu 
        <strong>pemenang dari 113 Karya Inovasi Indonesia Paling Prospektif</strong> 
        dari <strong>Business Innovation Center (BIC)</strong>, serta mendapatkan penghargaan dari 
        <strong>Public Relation Indonesia Award</strong>
      </p>
      <p style="text-align: justify;">
        Hingga saat ini, inovasi DDP telah diimplementasikan di <strong>573 desa/kelurahan</strong> 
        yang tersebar di <strong>34 kabupaten/kota</strong>, <strong>14 provinsi</strong>, <strong>6 pulau di Indonesia.</strong>
      </p>
    </div>
  </section>

  <!-- Data Desa Presisi di Indonesia -->
  <section class="bg-white block md:grid md:grid-cols-2 overflow-visible md:gap-12 items-center px-6 sm:px-12 py-12">
    <!-- Text left -->
    <div>
      <h2 class="text-2xl font-semibold mb-6 text-deep-navy-900">Perjalanan Data Desa Presisi di Indonesia</h2>
      

      <!-- Timeline Item -->
      <div class="space-y-5 text-sm text-gray-700">
        <!--Codding Tailwind -->
  
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md">
        <!-- Item 1 -->
        <div class="border-b">
          <button @click="selected === 1 ? selected = null : selected = 1" 
                class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-100">
              <span class="font-semibold">Periode Inisiasi (2014)</span>
              <svg :class="selected === 1 ? 'rotate-180' : ''"
                class="w-4 h-4 transition-transform duration-300 transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
          </button>
          <div x-show="selected === 1" x-transition class="px-6 pb-4 text-gray-700">
            <p><strong>Gagasan Data Desa Presisi (DDP)</strong> lahir dari riset kawasan perdesaan IPB University dan seruan 
              “Harus dimulai semenjak di desa!” oleh Prof. Dr. Sofyan Sjaf, S.Pt., M.Si. Muncul Sekolah Drone Desa (SDD) sebagai 
              gerakan awal.</p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="border-b">
          <button @click="selected === 2 ? selected = null : selected = 2"
                class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-100">
              <span class="font-semibold">Periode Eksperimen (2015–2018)</span>
              <svg :class="selected === 2 ? 'rotate-180' : ''"
                class="w-4 h-4 transition-transform duration-300 transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
          </button>
          <div x-show="selected === 2" x-transition class="px-6 pb-4 text-gray-700">
            <p><strong>Eksperimen pemetaan desa menggunakan drone</strong> dilakukan. Muncul metode <em>Drone Participatory Mapping</em> 
              (DPM) sebagai embrio metodologi DDP.</p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="border-b">
          <button @click="selected === 3 ? selected = null : selected = 3"
                class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-100">
              <span class="font-semibold">Periode Transformasi Ilmiah (2019)</span>
              <svg :class="selected === 3 ? 'rotate-180' : ''"
                class="w-4 h-4 transition-transform duration-300 transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
          </button>
          <div x-show="selected === 3" x-transition class="px-6 pb-4 text-gray-700">
            <p>Terbit buku <em>Involusi Republik Merdesa</em></strong> buku ini menjadi argumentasi dan dasar ilmiah pentingnya
               transformasi desa melalui proses pendataan desa dari bawah (Data Desa Presisi) dan peluncuran Aplikasi Merdesa untuk 
               publikasi hasil sensus & pemetaan desa.</p>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="border-b">
          <button @click="selected === 4 ? selected = null : selected = 4"
                class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-100">
              <span class="font-semibold">Periode Konsolidasi (2020)</span>
              <svg :class="selected === 4 ? 'rotate-180' : ''"
                class="w-4 h-4 transition-transform duration-300 transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
          </button>
          <div x-show="selected === 4" x-transition class="px-6 pb-4 text-gray-700">
            <p>Metode DDP dirumuskan dalam buku <em>Data Desa Presisi</em></strong> dan mendapat pengakuan melalui 
              penerbitan Hak Kekayaan Intelektual (HKI).</p>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="border-b">
          <button @click="selected === 5 ? selected = null : selected = 5"
                class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-100">
              <span class="font-semibold">Periode Implementasi Luas (2021–Sekarang)</span>
              <svg :class="selected === 5 ? 'rotate-180' : ''"
                class="w-4 h-4 transition-transform duration-300 transform"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
          </button>
          <div x-show="selected === 5" x-transition class="px-6 pb-4 text-gray-700">
            <p><strong>WebGIS Merdesa</strong> yang telah terintegrasi dengan <em>Artificial Intelligence</em>, Aplikasi <strong>Merdesa 
              Sensus</strong> yang semakin handal, <strong>Monev DDP</strong>, dan <strong>Merdesa Maps</strong> telah diluncurkan. 
              DDP terus diterapkan di ratusan desa seluruh Indonesia sebagai pendekatan pemetaan dan sensus berbasis warga.</p>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- Image slider -->
    <div class="rounded-xl shadow-xl overflow-visible relative">
        <div class="slider-container no-scrollbar flex overflow-x-auto snap-x snap-mandatory h-[28rem]">
        <img src="{{ asset('img/FotoSejarahDDP/Gambar30.jpeg')}}" alt="Pelatihan Drone DDP" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar31.jpeg')}}" alt="Diskusi Warga FGD" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar32.jpeg')}}" alt="Diskusi Warga FGD" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar33.jpeg')}}" alt="Diskusi Warga FGD" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar34.jpeg')}}" alt="Diskusi Warga FGD" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar35.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar24.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar25.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar26.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar27.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar28.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
        <img src="{{ asset('img/FotoSejarahDDP/Gambar29.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
    </div>
    <div class="absolute bottom-2 right-3 bg-black bg-opacity-50 text-white px-3 py-0.5 rounded text-xs font-semibold select-none shadow">
     1 / 3
    </div>
  </section>


    <!-- Komitmen Kami -->
    <section class="bg-white bg-gradient-to-r rounded-xl p-8 shadow-lg relative">
      <h2 class="text-2xl font-semibold border-l-4 border-[#00254F] pl-3 mb-8 text-[#00254F]">Komitmen Kami</h2>

      <!-- Konten Flex -->
      <div class="flex flex-col-reverse md:flex-row gap-12 items-center min-h-full min-h-[28rem] md:min-h-[32rem] lg:min-h-[36rem]">
    
        <!-- Komitmen Text -->
        <div class="flex-1 space-y-6 max-w-3xl">
          <p class="text-gray-800 leading-relaxed">
            Data Desa Presisi berkomitmen untuk terus menghadirkan pendekatan ilmiah dan partisipatif dalam pembangunan desa di Indonesia, 
            dengan memastikan:
          </p>

          <div class="space-y-4">
            <!-- Point 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#00254F] flex">
              <div class="text-white font-bold text-xl flex-shrink-0 mr-4 flex items-center justify-center w-8 h-8 rounded-full bg-[#00254F]">1</div>
              <div>
                <p class="font-semibold text-[#00254F]">Data kami dihasilkan bersama warga desa, bukan dari luar desa</p>
                <p class="text-sm text-gray-700 mt-1">DDP membangun proses pengumpulan informasi langsung bersama warga melalui pemetaan 
                  desa menggunakan drone, sensus digital, dan diskusi kelompok terfokus (FGD).</p>
              </div>
            </div>

            <!-- Point 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#00254F] flex">
              <div class="text-white font-bold text-xl flex-shrink-0 mr-4 flex items-center justify-center w-8 h-8 rounded-full bg-[#00254F]">2</div>
                <div>
                  <p class="font-semibold text-[#00254F]">Metode kami aman, ilmiah, dan berpihak kepada warga desa</p>
                  <p class="text-sm text-gray-700 mt-1">Metodologi DDP dikembangkan oleh peneliti IPB University, dijalankan dengan etika, 
                    transparansi, dan kedaulatan informasi di desa-desa seluruh Indonesia.</p>
                </div>
            </div>

            <!-- Point 3 -->
            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#00254F] flex">
              <div class="text-white font-bold text-xl flex-shrink-0 mr-4 flex items-center justify-center w-8 h-8 rounded-full bg-[#00254F]">3</div>
                <div>
                  <p class="font-semibold text-[#00254F]">Kualitas data yang kami hasilkan teruji dan presisi</p>
                  <p class="text-sm text-gray-700 mt-1">DDP menggabungkan pemetaan drone dengan resolusi tinggi, sensus digital, dan narasi 
                    kualitatif. Data yang dihasilkan kuat secara teknis dan kontekstual.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Gambar Slider -->
          <div class="flex-1 flex items-center justify-center h-full">
            <div class="relative w-full h-[28rem] rounded-xl shadow-xl overflow-hidden">
              <div class="slider-container no-scrollbar flex overflow-x-auto snap-x snap-mandatory h-full">
                <img src="{{asset('img/FotoSejarahDDP/Gambar36.jpeg')}}" alt="Dokumentasi Lapangan" class="snap-center flex-shrink-0 object-cover h-full w-full" />
                <img src="{{asset('img/FotoSejarahDDP/Gambar37.jpeg')}}" alt="Kegiatan Sosial" class="snap-center flex-shrink-0 object-cover h-full w-full" />
                <img src="{{asset('img/FotoSejarahDDP/Gambar38.jpeg')}}" alt="Kolaborasi Desa" class="snap-center flex-shrink-0 object-cover h-full w-full" />
                <img src="{{asset('img/FotoSejarahDDP/Gambar39.jpeg')}}" alt="Kolaborasi Desa" class="snap-center flex-shrink-0 object-cover h-full w-full" />
                <img src="{{asset('img/FotoSejarahDDP/Gambar40.jpeg')}}" alt="Kolaborasi Desa" class="snap-center flex-shrink-0 object-cover h-full w-full" />
              </div>

              <!-- Label berada di dalam gambar dan pojok kanan bawah -->
              <div class="absolute bottom-2 right-3 bg-black bg-opacity-50 text-white px-3 py-0.5 rounded text-xs font-semibold select-none shadow">
              1 / 3
              </div>
            </div>
          </div>

    </section>
    
      <section class="section-team" aria-labelledby="team-title">
      <div class="container text-center">
        <h2 id="team-title" class="section-title">THE TEAM</h2>

        <!-- Baris 1: 1 Card -->
        <div class="team-row row-1">
          <div class="team-card">
            <img src="{{ asset('img/team/team1.png')}}" class="team-img" alt="Prof. Dr. Sofyan Sjaf">
            <h5>Prof. Dr. Sofyan Sjaf, S.Pt., M.Si<br><span>Penanggung Jawab</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/sofyansjaf?utm_source=ig_web_button_share_sheet&igsh=MWdnZXoyZms0cDNwbw=="><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/s-sjaf-31b0854a/"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Baris 2: 2 Card -->
        <div class="team-row row-2">
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Dr. Megawati Simanjuntak">
            <h5>Dr. Megawati Simanjuntak, SP., M.Si<br><span>Pengarah</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Prof. Dr. Ir. Dodik Briawan">
            <h5>Prof. Dr. Ir. Dodik Briawan, MCM<br><span>Pengarah</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Baris 3: 7 Card -->
        <div class="team-row row-7">
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Prof. Dr. Ir. Anna Fatchiya">
            <h5>Prof. Dr. Ir. Anna Fatchiya, M.Si<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Dr. Tin Herawati">
            <h5>Dr. Tin Herawati, SP., M.Si<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Dr. Ir. Lilik Noor Yuliati">
            <h5>Dr. Ir. Lilik Noor Yuliati, MFSA<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Dr. Dwi Retno Hapsari">
            <h5>Dr. Dwi Retno Hapsari, SP., M.Si<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Dr. Syamsul Bahri Agus">
            <h5>Dr. Syamsul Bahri Agus, S.Pi., M.Si<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Ir. Yayat Heryatno">
            <h5>Ir. Yayat Heryatno, M.Ps<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img" alt="Anna Vipta Resti Mauludyani">
            <h5>Anna Vipta Resti Mauludyani, SP., M.Gizi<br><span>Tim Pakar</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Baris 4: 2 Card -->
        <div class="team-row row-2">
          <div class="team-card">
            <img src="{{ asset('img/team/Rajib.png')}}" class="team-img" alt="Rajib Gandi">
            <h5>Rajib Gandi, S.KPm, M.Si<br><span>Kepala Lab DDP</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/akangrajib/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/team4.png')}}" class="team-img" alt="Sampean">
            <h5>Sampean, M.Si<br><span>Wakil Kepala Lab DDP</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Baris 5: 4 Card : ketua divisi-->
        <div class="team-row row-4">
          <div class="team-card">
            <img src="{{ asset('img/team/Arsyad.png')}}" class="team-img">
            <h5>Ahmad Aulia Arsyad, S.KPm, M.Si<br><span>Divisi Perencanaan dan Organisasi</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/aaulia_arsyad/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/team3.png')}}" class="team-img">
            <h5>Afan Ray Mahardika, S.T, M.Si<br><span>Divisi Sains Data dan Teknologi Informasi</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/ray_afan/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/LaElson.png')}}" class="team-img">
            <h5>Dr. La Elson, S.Pi, M.Si<br><span>Divisi Geodesa</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/la_elson/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="team-card">
            <img src="{{ asset('img/team/Lukman.png')}}" class="team-img">
            <h5>Lukman Hakim, S.KPm, M.Si<br><span>Divisi Pengembangan Riset dan Inovasi Sosial</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/hakimlukman1989/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Divisi Perencanaan dan Organisasi -->
        <div class="division-header text-center mb-4">
            <h3 class="division-title">Divisi Perencanaan dan Organisasi</h3>
            <p class="division-subtitle text-muted">Bidang Keuangan</p>
          </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/Zessy.png')}}" class="team-img">
            <h5>Zessy Ardinal Barlan, S.KPm, M.Si<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/zessyardinal/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/Anna.png')}}" class="team-img">
            <h5>Ratu Anna Rufaida, S.KPm<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/ratuanna/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Siska.png')}}" class="team-img">
                <h5>Siska Krismayanti<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/siska_krismayanti/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Azzahra.png')}}" class="team-img">
            <h5>Azzahra Putri Permata, S.P<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/azzahraputrii/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Kerjasama dan Manajemen Projek -->
        <div class="division-header text-center mb-4">
            <p class="division-subtitle text-muted">Bidang Kerjasama dan Manajemen Projek</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Rizki Budi Utami, S.KPm <br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/rb.utami/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Sri Anom Amongjati, S.KPm, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/anom_amongjati/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Andi Muhammad Agriawan Suryaalim, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Malik Abdul Azis Siregar, S.M, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Badru Zaman, S.Hut<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/badruzaman_13/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Rifa.png')}}" class="team-img">
            <h5>Ratu Rifa Hanifah, S.E<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/raifhania_/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Media -->
        <div class="division-header text-center mb-4">
            <p class="division-subtitle text-muted">Bidang Media</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/Adhitya.png')}}" class="team-img">
            <h5>Adhitiya Muktafa Adnan Musaddad,S.KPm<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Titania Aulia, S.KPm., M.Si.<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Ilham Pandu Firmansyah, S.Tr.I.Kom<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/inikaryapandu_24/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Nadya Intan Richita, S.Tr.I.Kom<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/ndyintnrch/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Bayu.png')}}" class="team-img">
            <h5>Bayu Adyatama, S.P<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/tidakbayu/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Yandi.png')}}" class="team-img">
            <h5>Yandi Mooduto, S.TP, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/yandimooduto_/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/Diadji.png')}}" class="team-img">
            <h5>Diadji Kuntoro, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/diadjikuntoro/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Azka Wahyu Dzikrillah<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/azka.dzr/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>M Rifqi Ramadhan<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Arsip dan Kesekretariatan -->
        <div class="division-header text-center mb-4">
            <p class="division-subtitle text-muted">Bidang Arsip dan Kesekretariatan</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/Shelvy.png')}}" class="team-img">
            <h5>Shelvy Yulinda, S.E<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/shelvy.ylnd/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Farhah Azizah Salsabila, S.Hut<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/farhahzzs/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Sylvia Devi Ani<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/sylvia_deviani/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Maharani Azzahra, S.Tr.I.Kom<span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Pengembangan Sumber Daya Manusia -->
        <div class="division-header text-center mb-4">
            <p class="division-subtitle text-muted">Bidang Pengembangan Sumber Daya Manusia</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/Badar.png')}}" class="team-img">
            <h5>Badar Muhammad, S.Ikom, M.Si<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/badarrmd/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Rifaldi Cahyanto, S.KPm<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Khopipah Assonda, S.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/khopipahass/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Divisi Sains Data dan Teknologi Informasi -->
        <div class="division-header text-center mb-4">
            <h3 class="division-title">Divisi Sains Data dan Teknologi Informasi</h3>
            <p class="division-subtitle text-muted">Bidang Sains Data</p>
          </div>

        <div class="team-row row-4">
          <!-- Card Koordinator -->
          <div class="team-card">
            <img src="{{ asset('img/team/Sayyid.png')}}" class="team-img">
            <h5>Sayyid Al Bahr Maulana, M.T<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/sayyidalbahr/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/Harits.png')}}" class="team-img">
            <h5>Abdurrahman Harits, S.E<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/harisbdrr/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Nabila Gustia Mufidah, S.P<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/bilalanghijau/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Teknologi Informasi -->
        <div class="division-header text-center mb-4">
            <p class="division-subtitle text-muted">Bidang Teknologi Informasi</p>
          </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/Ikhlas.png')}}" class="team-img">
            <h5>Ikhlasul Amal, S.Kom<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/ikhlaslml/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Muhammad Fauzan Ramadhan, S.Komi<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Abdullah Alhayad Arafah, S.T<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/_alhayad/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Mufrihatun El Walidayni,S.Kom<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/mufrihatunelwalidayni/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
                <h5>Vanessa Febriana Rahayu,S.Kom<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/vanessafebrianarahayu/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Bidang Peralatan dan Perlengkapan -->
        <div class="division-header text-center mb-4">
          <h3 class="division-title">Divisi Geodesa</h3>
          <p class="division-subtitle text-muted">Bidang Peralatan dan Perlengkapan</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/Fajar.png')}}" class="team-img">
            <h5>Fajar Cakrawinata, S.E <br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/fcakrawinata/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="{{ asset('img/team/poto.png')}}" class="team-img">
            <h5>Nafa Nur Khalifah, S.Hut, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>

        <!-- Bidang Pengembangan Kader Geospasial -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Pengembangan Kader Geospasial</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Fajar.png" class="team-img">
            <h5>Andi Yaodi Nurani Yamin, S.I.K, M.Si<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Chatarina.png" class="team-img">
            <h5>Chatarina Novianti, S.Hut, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/chatarinanovianti/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>

        <!-- Bidang Data dan Informasi Geospasial -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Data dan Informasi Geospasial</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Ansar.png" class="team-img">
            <h5>Ansar, S.Pi<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/casperansar/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Hana.png" class="team-img">
            <h5>Hana Primanda Raihanisa, S.P<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/hanaprimanda/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>

        <!-- Bidang Geospasial Sains Data -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Geospasial Sains Data</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Rizky Subekti, S.Kel<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Sulaeman, S.P<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/sardinsulaeman/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>
  
        <!-- Bidang Inovasi Riset dan Publikasi Geospasial -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Inovasi Riset dan Publikasi Geospasial</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Fitrah.png" class="team-img">
            <h5>Fitrah, S.Hut, M.Si<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Irsya.png" class="team-img">
            <h5>Irsya Muthia Muthmainnah, S.Hut, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/irsyamuthia/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>

        <!-- Bidang Inovasi Riset dan Publikasi Geospasial -->
        <div class="division-header text-center mb-4">
          <h3 class="division-title">Divisi Pengembangan Riset dan Inovasi Sosial</h3>
          <p class="division-subtitle text-muted">Bidang Publikasi dan Pemanfaatan Data</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Widdy.png" class="team-img">
            <h5>Widdy Apriandi, S.E</h5><br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/widdyapriandi/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Rian.png" class="team-img">
            <h5>Rian Hidayat, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/rian_hidayat467/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 

          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Ghilandy Ramadhan, S.T, M.Sc<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/ghilandy.ramadhan/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 

          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Fauziyya Puji Winahyu, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/fauziyyawinahyu/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>

        <!-- Bidang Kaderisasi dan Inovasi Sosial -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Kaderisasi dan Inovasi Sosial</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Rijaluddin, M.Si</h5><br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/rijal0/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Iswan.png" class="team-img">
            <h5>Iswan Taufik, S.Sos<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/iswantaufik97/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 

          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Putra Ramadhan Daeng Hase, S.Hut<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/putragorapu_/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>  
        </div>

        <!-- Bidang Pengembangan Metodologi Sosial -->
        <div class="division-header text-center mb-4">
          <p class="division-subtitle text-muted">Bidang Pengembangan Metodologi Sosial</p>
        </div>

        <div class="team-row row-4">
          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/Sansan.png" class="team-img">
            <h5>San San Ramdhani, S.M<br><span>Koordinator</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/sansanrmdhn/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <!-- Card Anggota -->
          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Ali Munajib, S.Sos<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/alimunajibi/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 

          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Muhamad Fauzi, M.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="https://www.instagram.com/muhamadfauzi49/"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>  

          <div class="team-card">
            <img src="assets/img/team/poto.png" class="team-img">
            <h5>Ananda Novita Hi Pattu, S.Si<br><span>Anggota</span></h5>
            <div class="social-icons">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> 
        </div>
      </div>
      </section>

  
  
  </main>