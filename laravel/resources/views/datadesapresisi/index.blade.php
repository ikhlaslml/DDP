 @extends('datadesapresisi.app')
 
 <header class="banner mb-5">
      <div class="banner-content">
        <!--<button class="btn-shop" type="button">Explore Now</button> -->
      </div>

    <!-- Buku Data Desa Presisi Section (6 books, arranged 3 top + 3 below) -->
    <section class="container bg-white text-center py-5 rounded shadow-sm">
        <h3 class="section-title mb-4">Buku Data Desa Presisi</h3>
        <p>Data akurat dan terkini dari setiap desa di Indonesia dalam satu koleksi buku lengkap.</p>
            <div class="books-grid">
                 @foreach ($bukus as $buku)
                <article class="book-card book-card-holder" tabindex="0">
                    <img src="{{ asset('storage/'.$buku->gambar) }}" alt="Data Desa Presisi" />
                    <div class="book-info">
                        <h4 class="book-title">{{ $buku->judul }}</h4>
                    <div class="book-author">by {{ $buku->penulis }}</div>
                    <div class="book-desc" aria-label="description">{{ $buku->ringkasan }}</div>
                    </div>
                    <button class="btn-add-cart" type="button" aria-label="Add Village Mapping 2020 to cart">Baca</button>
                </article>
                @endforeach

               
            </div>
            <nav aria-label="Page navigation" class="d-flex justify-content-center mt-4">
              <ul class="pagination" id="pagination">
                <li class="page-item disabled" id="prev-page">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
            <!-- Dynamic page numbers will be inserted here by JavaScript -->
                <li class="page-item" id="next-page">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>

    </section>
    </header>