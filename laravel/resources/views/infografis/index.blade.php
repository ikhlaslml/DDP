@extends('Infografis.app')
<section class="container bg-white text-center py-5 rounded shadow-sm">
    <h3 class="section-title mb-4">Infografis Data Desa Presisi</h3>
    <p>Gambaran visual tentang kehidupan desa berdasarkan data presisi</p>

    <div class="books-grid cards-wrapper">
    @foreach ($infografis as $infografis)
      <article class="book-card book-card-holder" tabindex="0">
        <!-- Gambar utama sebagai pemicu -->
        <img src="{{ asset('storage/'.$infografis->gambar) }}" alt="Infografis 1" />
        <div class="book-info">
          <h4 class="book-title">{{ $infografis->judul }}</h4>
          <div class="book-author">{{ $infografis->keterangan }}</div>
        </div>
        <a href="assets/img/coverinfografis/infografis1/coverinfografis1.png" class="btn-add-cart glightbox-infografis" data-gallery="infografis1">Lihat</a>

        <!-- Gambar lainnya, tersembunyi tapi ikut lightbox -->
        <a href="assets/img/coverinfografis/infografis1/2.png" class="glightbox-infografis" data-gallery="infografis1" style="display: none;"></a>
        <a href="assets/img/coverinfografis/infografis1/3.png" class="glightbox-infografis" data-gallery="infografis1" style="display: none;"></a>
        <a href="assets/img/coverinfografis/infografis1/4.png" class="glightbox-infografis" data-gallery="infografis1" style="display: none;"></a>
        <a href="assets/img/coverinfografis/infografis1/5.png" class="glightbox-infografis" data-gallery="infografis1" style="display: none;"></a>
        <a href="assets/img/coverinfografis/infografis1/6.png" class="glightbox-infografis" data-gallery="infografis1" style="display: none;"></a>
      </article>
       @endforeach

    </div>
</section>

<nav aria-label="Page navigation" class="d-flex justify-content-center mt-4">
  <ul class="pagination" id="pagination">
    <li class="page-item disabled" id="prev-page">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <!-- Dinamis -->
    <li class="page-item" id="next-page">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>