@extends('Berita.app')
<section class="breadcrumb-container" aria-label="Breadcrumb and page title">
  <nav aria-label="Breadcrumb" class="breadcrumb">
    <!-- <a href="index.html" aria-label="Go back to previous page">
      <span class="material-icons" aria-hidden="true" style="vertical-align: middle;">arrow_back</span>Kembali
    </a> -->
    <h3 class="section-title mb-4">Berita Data Desa Presisi</h3>
  </nav>
</section>

<main class="news-list" role="main" aria-label="List of latest news articles">
     @foreach ($beritas as $berita)
  <article class="news-item" tabindex="0" aria-labelledby="news1-title" aria-describedby="news1-desc news1-date">
    <div class="news-image">
      <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Dekan FEMA IPB, Sofyan Sjaf menyerahkan dokumen kepada Gubernur di acara resmi" />
    </div>
    <div class="news-content">
      <h3 class="news-title" id="news1-title">{{ $berita->judul_artikel }}</h3>
      <div class="news-date" id="news1-date">{{ $berita->tanggal }}</div>
      <p class="news-description" id="news1-desc">{{ $berita->readmore }}
      </p>
      <a href="{{ route('Berita.show', $berita->id) }}" class="read-more-btn" aria-label="Baca selengkapnya tentang Penyerahan Data Desa Presisi Kolaka Utara">
        Baca Selengkapnya
      </a>
    </div>
  </article>
    @endforeach
</main>