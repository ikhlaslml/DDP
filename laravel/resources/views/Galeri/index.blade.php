<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Testimoni Page</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap & AOS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">



  <link href="assets/img/logo-banner2.png" rel="icon">

  <!-- GLightbox -->
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<style>

<style>
    /* Existing styles... */

    .testimonial-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .rating-star {
        color: #fbbf24;
    }
    .highlight-card {
        position: relative;
        z-index: 1;
    }
    .highlight-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(to right, #8B0000, #4B5563, #1E3A8A);
        z-index: -1;
        border-radius: 0.5rem;
        opacity: 0.7;
    }

    /* ✨ Tambahan padding hanya untuk konten utama */
    #main-content {
        padding: 35px;
        flex-grow: 1;
    }

    @media (max-width: 768px) {
        #main-content {
            padding: 24px;
        }
    }

    @media (max-width: 480px) {
        #main-content {
            padding: 16px;
        }
    }
</style>

</style>

  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
 
</head>
<body class="pt-20 bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">
  <div id="header-placeholder"></div>


<div id="main-content">
 
    <!-- Testimonial Grid -->
    <div class="container mx-auto px-4 py-16">
        <!-- Filter Controls -->
        <div class="flex flex-wrap justify-center gap enrolling-section mb-12">
            <button class="px-6 py-2 rounded-full bg-white border border-blue-100 text-blue-600 font-medium mr-3 mb-3 hover:bg-blue-50 transition">Semua</button>
            <button class="px-6 py-2 rounded-full bg-white border border-blue-100 text-gray-600 font-medium mr-3 mb-3 hover:bg-blue-50 transition">5 Bintang</button>
            <button class="px-6 py-2 rounded-full bg-white border border-blue-100 text-gray-600 font-medium mr-3 mb-3 hover:bg-blue-50 transition">4 Bintang</button>
            <button class="px-6 py-2 rounded-full bg-white border border-blue-100 text-gray-600 font-medium mr-3 mb-3 hover:bg-blue-50 transition">Kata Kunci</button>
        </div>

        <!-- Testimonial Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Highlighted Testimonial -->
            <div class="highlight-card bg-white p-8 rounded-lg shadow-md testimonial-card">
                <div class="flex items-start mb-6">
                    <img src="assets/img/testimonials/akmal.jpeg" alt="dirjen otda ri" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">Dr. Drs. Akmal Malik, M.Si</h3>
                        <p class="text-gray-500 text-sm" style="color: black;">Direktorat Jenderal Otonomi Daerah Kementerian Dalam Negeri RI
</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4 italic">“Ini bukan hanya tentang angka, tetapi tentang membangun hubungan yang lebih dekat dan penuh kepercayaan antara pemerintah dan masyarakat.” Disampaikan pada  acara Serah Terima Hasil Kegiatan Membangun Data Desa/Kelurahan Presisi di Borneo Ballroom, Hotel Novotel Balikpapan.
</p>
                <div class="flex justify-between items-center">
                    <div class="flex rating-star">
                        ★ ★ ★ ★ ★
                    </div>
                    <span class="text-sm text-gray-400" style="color: black;">Kamis (28/11/2024)</span>
                </div>
            </div>

            <!-- Regular Testimonials -->
            <div class="bg-white p-6 rounded-lg shadow-sm testimonial-card">
                <div class="flex items-start mb-4">
                    <img src="assets/img/testimonials/andap.jpeg" alt="gubernur Sultra" class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="font-medium">Andap Budhi Revianto, S.I.K., M.H</h3>
                        <p class="text-gray-500 text-xs">Pj. Gubernur Sulawesi Tenggara 2023</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-3 italic">“Untuk mewujudkan Sultra yang kedepannya semakin maju, sejahtera, dan modern diperlukan data yang akurat. Sehingga dari data yang akurat maka akan memudahkan didalam perencanaan, penganggaran, pelaksanaan, dan pemantauan, serta evaluasi kebijakan pembangunan di Sultra.” Disampaikan pada acara penyerahan naskah akademik dan ranperda sistem penyelanggaraan pemerintah daerah berbasis DDP.
</p>
                <div class="flex justify-between items-center">
                    <div class="flex rating-star">
                        ★ ★ ★ ★ ☆
                    </div>
                    <span class="text-xs text-gray-400">1 bulan lalu</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm testimonial-card">
                <div class="flex items-start mb-4">
                    <img src="assets/img/testimonials/kuswara.jpeg" alt="Foto wanita muda dengan hijab tersenyum ramah dengan latar belakang kantor" class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="font-medium">Ade Kuswara Kunang, S.H</h3>
                        <p class="text-gray-500 text-xs">Bupati Bekasi 2025-2030
</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-3 italic">“Agar program pemerintahan lebih efisien, efektif, dan inklusif, keseluruhan program nantinya akan dikemas dengan cara yang kekinian dan berbasis Data Desa Presisi.” disampaikannya dalam pidato perdana di Rapat Paripurna DPRD Kabupaten Bekasi, tak lama setelah dilantik oleh Presiden Prabowo Subianto di Istana Negara.</p>
                <div class="flex justify-between items-center">
                    <div class="flex rating-star">
                        ★ ★ ★ ★ ★
                    </div>
                    <span class="text-xs text-gray-400">Kamis(20/2/2025).</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm testimonial-card lg:col-span-2">
                <div class="flex items-start mb-4">
                    <img src="assets/img/testimonials/arianto.jpeg" alt="kadis" class="w-16 h-16 rounded-full object-cover">
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Arianto, S.Sos., M.SI </h3>
                        <p class="text-gray-500 text-sm">Kadis DPMD  Kab. Kutai Kartanegara</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-3 italic">"Data-data ini akan berkesinambungan dengan program-program pemerintah khususnya yang berkaitan dengan penanganan kemiskinan serta pengentasan stunting. Data Desa Presisi ini akan menjadi tumpuan Pemkab Kukar terhadap pendataan"</p>
                <div class="flex justify-between items-center">
                    <div class="flex rating-star">
                        ★ ★ ★ ★ ★
                    </div>
                    <span class="text-sm text-gray-400">2 bulan lalu</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm testimonial-card">
                <div class="flex items-start mb-4">
                    <img src="assets/img/testimonials/feri.jpeg" alt="Foto wanita profesional muda dengan gaya rambut modern dan makeup natural" class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h3 class="font-medium">Ferry Joko Juliantono SE Ak., M.Si
</h3>
                        <p class="text-gray-500 text-xs">Wakil Menteri Koperasi (Wamenkop) sekaligus Koordinator Ketua Pelaksana Harian Satgas Percepatan dan Pembentukan Kopdes/Kel Merah Putih
</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-3 italic">"Gerakan kopdes berbasis data desa presisi lebih terukur, terarah, dan tepat sasaran dalam mengatasi kemiskinan dan pengangguran di desa. DDP juga menjadi jawaban atas kekhawatiran berbagai pihak yang menyebut kopdes merah putih hanya bersifat top down atau sentralistik"</p>
                <div class="flex justify-between items-center">
                    <div class="flex rating-star">
                        ★ ★ ★ ★ ☆
                    </div>
                    <span class="text-xs text-gray-400">disampaikan pada Juni 2025</span>
                </div>
            </div>


    <!-- Testimonial Baru 1 -->
    <div class="bg-white p-6 rounded-lg shadow-sm testimonial-card">
        <div class="flex items-start mb-4">
            <img src="assets/img/testimonials/sultan.jpg" alt="testimonial baru" class="w-12 h-12 rounded-full object-cover">
            <div class="ml-3">
                <h3 class="font-medium">Sri Sultan Hamengkubuwono X</h3>
                <p class="text-gray-500 text-xs">Gubernur Yogyakarta</p>
            </div>
        </div>
        <p class="text-gray-600 text-sm mb-3 italic">"Kalau kita ingin bicara keberlanjutan, maka data yang valid adalah keharusan. Dan saya melihat DDP bisa menjawab kebutuhan itu"</p>
        <div class="flex justify-between items-center">
            <div class="flex rating-star">★ ★ ★ ★ ☆</div>
            <span class="text-xs text-gray-400">Juli 2025</span>
        </div>
    </div>

</div>

       
</div>

<!-- Video Testimonials Section -->
<div class="mt-24">
  <h2 class="text-3xl font-bold text-center mb-12">Testimoni Video</h2>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- Video 1 -->
    <div class="bg-white rounded-xl overflow-hidden shadow-lg">
      <div class="relative pt-[56.25%] bg-gray-200">
        <iframe class="absolute top-0 left-0 w-full h-full"
          src="https://www.youtube.com/embed/ykLDXrA409U"
          title="Transformasi Digital Perusahaan"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="p-6">
        <h3 class="font-bold text-lg mb-2">Komitmen Akademik terhadap Pembangunan Desa</h3>
        <p class="text-gray-500 text-sm">Prof. Arif Satria · Rektor IPB University</p>

      </div>
    </div>

    <!-- Video 2 -->
    <div class="bg-white rounded-xl overflow-hidden shadow-lg">
      <div class="relative pt-[56.25%] bg-gray-200">
        <iframe class="absolute top-0 left-0 w-full h-full"
          src="https://www.youtube.com/embed/CocycfDhAhE"
          title="Peningkatan Trafik Website 300%"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="p-6">
        <h3 class="font-bold text-lg mb-2">Gagasan Mendasar Data Desa Presisi</h3>
        <p class="text-gray-500 text-sm">Prof. Dr. Sofyan Sjaf · Penggagas Data Desa Presisi</p>

      </div>
    </div>

  </div>
</div>

</div>    

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Script umum -->
<script src="assets/js/main.js"></script>

<!-- Script halaman -->
<script src="assets/js/testimoni_page.js"></script>

<script>
  fetch("header.html").then(res => res.text()).then(data => {
    document.getElementById("header-placeholder").innerHTML = data;
  });
  fetch("footer.html").then(res => res.text()).then(data => {
    document.getElementById("footer-placeholder").innerHTML = data;
  });

       // Simple animation for testimonial cards
        document.querySelectorAll('.testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s ease';
            });
        });

        // Filter functionality would go here in a real implementation
        console.log('Testimonial page loaded');
</script>



<div id="footer-placeholder"></div>

<script>
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
</script>

</body>
</html>

