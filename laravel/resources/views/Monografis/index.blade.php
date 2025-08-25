 
 @extends('Monografis.app')
 <main>

    <h3 class="section-title mb-4">Monografi Data Desa Presisi</h3>

    <!-- FILTERS -->

    <section class="filters-container" aria-label="Filter Monografi Desa">

      <!-- Region Dropdown -->

      <div class="dropdown-fitur" id="region-dropdown" tabindex="0" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="region-label" role="combobox" aria-controls="region-list">

        <div class="dropdown-toggle-fitur" id="region-label" aria-live="polite">

          <span class="placeholder-fitur">Cari Region</span>

          <span class="material-icons dropdown-arrow-fitur" aria-hidden="true">expand_more</span>

        </div>

        <ul class="dropdown-menu-fitur" role="listbox" tabindex="-1" id="region-list" aria-multiselectable="false" hidden>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Sumatera</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Jawa</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Kalimantan</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Sulawesi</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Bali</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Nusa Tenggara</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Maluku</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">Papua</li>

        </ul>

      </div>

      <!-- Desa/Kelurahan Dropdown -->

      <div class="dropdown-fitur" id="desa-dropdown" tabindex="0" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="desa-label" role="combobox" aria-controls="desa-list">

        <div class="dropdown-toggle-fitur" id="desa-label" aria-live="polite">

          <span class="placeholder-fitur">Cari Desa/Kelurahan</span>

          <span class="material-icons dropdown-arrow-fitur" aria-hidden="true">expand_more</span>

        </div>

        <ul class="dropdown-menu-fitur" role="listbox" tabindex="-1" id="desa-list" aria-multiselectable="false" hidden>

          <li class="dropdown-item-fitur" role="option" tabindex="0">16.12.03.2010 - Babat</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">11.71.07.2006 - Lhong Raya</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">11.71.03.2003 - Lambung</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">13.06.07.2004 - Penampuang</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">17.09.07.2002 - Penembang</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">16.12.03.2001 - Purun</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">16.12.02.2007 - Tempirai</li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">16.12.04.2001 - Betung</li>

        </ul>

      </div>

      <!-- Tahun Filter Dropdown -->

      <div class="dropdown-fitur" id="tahun-dropdown" tabindex="0" aria-haspopup="listbox" aria-expanded="false" aria-labelledby="tahun-label" role="combobox" aria-controls="tahun-list">

        <div class="dropdown-toggle-fitur" id="tahun-label" aria-live="polite" aria-atomic="true">

          <span class="placeholder-fitur">Filter Tahun</span>

          <span class="material-icons dropdown-arrow-fitur" aria-hidden="true">expand_more</span>

        </div>

        <ul class="dropdown-menu-fitur" role="listbox" tabindex="-1" id="tahun-list" aria-multiselectable="true" hidden>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-semua" checked />

            <label for="filter-semua">Tampilkan Semua</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2025" />

            <label for="filter-2025">2025</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2024" />

            <label for="filter-2024">2024</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2023" />

            <label for="filter-2023">2023</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2022" />

            <label for="filter-2022">2022</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2021" />

            <label for="filter-2021">2021</label>

          </li>

          <li class="dropdown-item-fitur" role="option" tabindex="0">

            <input type="checkbox" id="filter-2020" />

            <label for="filter-2020">2020</label>

          </li>

        </ul>

      </div>

      <!-- Clear Filters Button -->

      <button class="btn-filter-clear" id="clear-filters" aria-label="Reset filter pilihan">

        <span class="material-icons" aria-hidden="true">filter_alt_off</span>

      </button>

    </section>

    <section class="monografi-list" aria-live="polite" aria-label="Daftar monografi desa">
     @foreach ($monografis as $monografi)
      <article class="monografi-card" data-region="Jawa Barat" data-desa="Mekarsari" data-tahun="2025">

        <article tabindex="0" aria-label="Buku Monografi Desa Mekarsari">
          <div class="frame" style="background-image: url('assets/img/frame/FrameMonografi.png');">
            <img class="monografi-cover" src="{{ asset('storage/'.$monografi->gambar) }}" alt="">
          </div>
        </article>

        <div class="monografi-content">

          <div class="monografi-data">

            <div><strong>Desa/Kelurahan :</strong> {{ $monografi->desa }}</div>

            <div><strong>Kecamatan :</strong> {{ $monografi->kecamatan }}</div>

            <div><strong>Kabupaten/Kota :</strong> {{ $monografi->kota }}</div>

            <div><strong>Provinsi :</strong> {{ $monografi->provinsi }}</div>

            <div><strong>Tahun :</strong> {{ $monografi->tahun }}</div>

          </div>

          <div>

            <p class="label-summary">Ringkasan Eksekutif :</p>

            <p class="monografi-text">
{{ $monografi->ringkasan }}

            </p>

          </div>

          <button class="btn-download" aria-label="Unduh monografi Mekarsari"data-bs-toggle="modal" data-bs-target="#exampleModal">Unduh</button>

        </div>

      </article>
      @endforeach


    </section>

    <div>
      <nav aria-label="Monografi pagination">
        <ul class="pagination justify-content-center mt-4" id="pagination-container"></ul>
      </nav>
    </div>

  </main>
  
          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Monografi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h4>Isikan Dengan Alamat Email Anda !</h4>
                <input type="text" name="email" class="form-control" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>