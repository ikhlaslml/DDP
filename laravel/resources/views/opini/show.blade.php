 @extends('opini.app')

 <main>
    <div class="container py-5" role="main">
      <article class="artikel">
        <h1>{{ $artikels->judul_artikel }}</h1>
        <p class="date">Jul 2, 2025</p>
        <img src="{{ asset('storage/'.$artikels->gambar) }}" alt="Deskripsi Gambar" class="featured-image" />

        <p><em>“T{{ $artikels->readmore }}”.</em></p>

        <h2>TRANSFORMASI DESA</h2>
        <p>oleh: {{ $artikels->penulis }}</p>
        <p class="date">{{ $artikels->tanggal }}</p>
        <p>{!! nl2br(e($artikels->isi_artikel)) !!}
        </p>

      </article>
     
    </div>

        <section class="other-news container" id="other-news" aria-label="Berita Lainnya">
            <h2>Artikel Lainnya</h2>
            <div class="news-cards" id="news-cards-wrapper">
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita2.png" alt="Data Desa Presisi Dorong Pembangunan Daerah yang Terukur dan Tepat Sasaran" />
                    <div class="news-content">
                        <h3 class="news-title">Data Desa Presisi Dorong Pembangunan Daerah yang Terukur dan Tepat Sasaran</h3>
                        <p class="news-date">Jan 4, 2025</p>
                        <p class="news-description">Lima aspek tersebut meliputi pemenuhan hak atas sandang, papan, pendidikan dan kebudayaan; kesehatan; pekerjaan dan jaminan sosial serta perlindungan hukum, HAM, infrastruktur, dan lingkungan hidup.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita3.png" alt="Kabupaten Kutai Kartanegara Luncurkan Program Data Desa Presisi" />
                    <div class="news-content">
                        <h3 class="news-title">Kabupaten Kutai Kartanegara Luncurkan Program Data Desa Presisi</h3>
                        <p class="news-date">May 17, 2024</p>
                        <p class="news-description">Akmal Malik menekankan pentingnya data yang presisi untuk memastikan hak-hak masyarakat dapat disalurkan dengan tepat.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita4.png" alt="PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP" />
                    <div class="news-content">
                        <h3 class="news-title">PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP</h3>
                        <p class="news-date">Feb 22, 2025</p>
                        <p class="news-description">Upaya ini diharapkan dapat menjadi pondasi utama dalam memastikan pembangunan yang tepat sasaran, efektif dan efisien.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita5.png" alt="PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP" />
                    <div class="news-content">
                        <h3 class="news-title">Kabupaten Kutai Kartanegara Luncurkan Program Data Desa Presisi</h3>
                        <p class="news-date">Feb 22, 2025</p>
                        <p class="news-description">Upaya ini diharapkan dapat menjadi pondasi utama dalam memastikan pembangunan yang tepat sasaran, efektif dan efisien.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita6.jpg" alt="PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP" />
                    <div class="news-content">
                        <h3 class="news-title">Pertama di Indonesia, DDP di Sulawesi Tenggara Diperkuat dengan Ranperda</h3>
                        <p class="news-date">Feb 22, 2025</p>
                        <p class="news-description">Upaya ini diharapkan dapat menjadi pondasi utama dalam memastikan pembangunan yang tepat sasaran, efektif dan efisien.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita7.jpg" alt="PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP" />
                    <div class="news-content">
                        <h3 class="news-title">Data Desa Presisi Kolaka Utara Diserahkan ke Pemprov Sultra, Pj Gubernur: Ini Penting Bagi Sultra</h3>
                        <p class="news-date">Feb 22, 2025</p>
                        <p class="news-description">Upaya ini diharapkan dapat menjadi pondasi utama dalam memastikan pembangunan yang tepat sasaran, efektif dan efisien.</p>
                    </div>
                </article>
                <article class="news-card" tabindex="0">
                    <img class="news-image" src="assets/img/newspic/gambarberita8.jpg" alt="PDIP inisiator raperda sistem penyelenggaraan pemerintahan basis DDP" />
                    <div class="news-content">
                        <h3 class="news-title">Sultra Terdepan dalam Implementasi Data Desa Presisi, Pj Gubernur Serahkan Data DDP Kolaka Utara</h3>
                        <p class="news-date">Feb 22, 2025</p>
                        <p class="news-description">Upaya ini diharapkan dapat menjadi pondasi utama dalam memastikan pembangunan yang tepat sasaran, efektif dan efisien.</p>
                    </div>
                </article>
            </div>
            <ul class="pagination" id="pagination-news"></ul>
        </section>
  </main>