@extends('Jurnal.app')
<main role="main" class="main-content text-center">
    <h3 class="section-title mb-4">Jurnal Data Desa Presisi</h3>
    <p class="page-subtitle">Menghadirkan jurnal hasil penelitian terbaru terkait data desa dengan teknologi presisi
        untuk pembangunan yang lebih baik dan berbasis data.
    </p>

    <div class="filter-bar flex flex-wrap justify-end items-center gap-3 mt-4 mb-6 text-right">
        <!-- Pencarian -->
        <input type="text" id="searchInput" placeholder="Cari jurnal..." class="w-full md:w-1/2 px-4 py-2 border rounded-md shadow-sm" />

        <!-- Sorting -->
        <select id="sortSelect" class="w-full md:w-1/4 px-3 py-2 border rounded-md shadow-sm">
          <option value="desc">2020</option>
          <option value="asc">2021</option>
          <option value="asc">2022</option>
          <option value="asc">2023</option>
          <option value="asc">2024</option>
          <option value="asc">2025</option>
        </select>
      </div>

    <section class="card-grid" aria-label="Daftar jurnal data desa presisi">
      <!-- Card 1 -->
       @foreach ($jurnals as $jurnal)
      <article article class="card" tabindex="0" role="article"
        data-title="Pemanfaatan Teknologi GPS untuk Pemetaan Desa"
        data-year="2022"
        data-author="Ahmad S"
        data-abstract="Penelitian ini membahas penggunaan GPS presisi tinggi dalam pemetaan wilayah desa secara 
        akurat untuk mendukung pembangunan berkelanjutan.">        
        <img src="{{ asset('storage/'.$jurnal->gambar) }}" alt="Gambaran jurnal 1" />
        <div class="card-content">
          <h3 id="title1" class="card-title">{{ $jurnal->judul }}</h3>
          <div class="card-meta" id="descYear1 descAuthor1">Penulis: {{ $jurnal->penulis }}, Tahun: {{ $jurnal->readmore }}</div>
          <p class="card-abstract" id="desc1">{{ $jurnal->ringkasan }}</p>
          <button class="btn-add-cart" type="button" aria-label="lihatjurnal1">Lihat</button>
        </div>
      </article>
       @endforeach
    </section>

    <nav aria-label="Pagination jurnal">
      <ul class="pagination justify-content-center mt-4" id="pagination-jurnal"></ul>
    </nav>

  </main>