@extends('opini.app')
<body>
  <main role="main" class="main-content text-center">
    <h3 class="section-title mb-4">Opini Pegiat Data Desa Presisi</h3>
    <p class="page-subtitle">Menghadirkan Opini Pegiat Data Desa Presisi terbaru terkait data desa dengan teknologi presisi untuk pembangunan yang lebih baik dan berbasis data.</p>

    <div class="filter-bar flex flex-wrap justify-end items-center gap-3 mt-4 mb-6 text-right">
      <input type="text" id="searchInput" placeholder="Cari artikel..." class="w-full md:w-1/2 px-4 py-2 border rounded-md shadow-sm" />
      <select id="sortSelect" class="w-full md:w-1/4 px-3 py-2 border rounded-md shadow-sm">
        <option value="desc">2025</option>
        <option value="asc">2024</option>
        <option value="asc">2023</option>
        <option value="asc">2022</option>
        <option value="asc">2021</option>
        <option value="asc">2020</option>
      </select>
    </div>

    <section class="card-grid" aria-label="Daftar artikel data desa presisi">
      <!-- Card 1 -->
     @foreach ($artikels as $artikel)
      <article article class="card" tabindex="0" role="article"
        data-title="Pemanfaatan Teknologi GPS untuk Pemetaan Desa"
        data-year="2022"
        data-author="Ahmad S"
        data-abstract="Penelitian ini membahas penggunaan GPS presisi tinggi dalam pemetaan wilayah desa secara 
        akurat untuk mendukung pembangunan berkelanjutan.">        
        <img src="{{ asset('storage/'.$artikel->gambar) }}" alt="Gambaran jurnal 1" />
        <div class="card-content">
          <h3 id="title1" class="card-title">{{ $artikel->judul_artikel }}</h3>
          <div class="card-meta" id="descYear1 descAuthor1">Penulis: {{ $artikel->penulis }}. Tahun: {{ $artikel->tanggal }}</div>
          <p class="card-abstract" id="desc1">{{ $artikel->readmore }}</p>
          <a href="{{ route('opini.show', $artikel->id) }}" class="btn-add-cart" aria-label="Baca Artikel: Pemanfaatan Teknologi GPS untuk Pemetaan Desa">Baca</a>
        </div>
      </article>
       @endforeach
    </section>

    <nav aria-label="Pagination jurnal">
      <ul class="pagination justify-content-center mt-4" id="pagination-jurnal"></ul>
    </nav>

  </main>