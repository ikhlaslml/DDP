/* Accessible dropdown toggle logic & filter functionality */

    (() => {

      /* Utility: Toggle ARIA expanded and menu visibility */

      function toggleDropdown(dropdown, open) {

        const expanded = dropdown.getAttribute('aria-expanded') === 'true';

        const shouldOpen = open !== undefined ? open : !expanded;

        dropdown.setAttribute('aria-expanded', shouldOpen);

        const menu = dropdown.querySelector('.dropdown-menu-fitur');

        if (menu) {

          if (shouldOpen) {

            menu.hidden = false;

            menu.focus();

          } else {

            menu.hidden = true;

          }

        }

      }



      /* Close all dropdowns except active */

      function closeAllDropdowns(except) {

        document.querySelectorAll('.dropdown-fitur').forEach(dd => {

          if (dd !== except) toggleDropdown(dd, false);

        });

      }



      /* Selectors & state */

      const regionDropdown = document.getElementById('region-dropdown');

      const desaDropdown = document.getElementById('desa-dropdown');

      const tahunDropdown = document.getElementById('tahun-dropdown');

      const clearFiltersBtn = document.getElementById('clear-filters');



      /* Data cards container */

      const monografiList = document.querySelector('.monografi-list');

      const cards = Array.from(monografiList.children);



      /* Current filter state */

      let selectedRegion = null;

      let selectedDesa = null;

      let selectedTahun = new Set();



      /* Init tahun filter "Tampilkan Semua" checked on start */

      const tahunCheckboxAll = document.getElementById('filter-semua');

      selectedTahun.add('all');



      /* Toggle dropdown open/close on toggle click or keyboard enter/space*/

      function setupDropdown(dropdown) {

        const toggle = dropdown.querySelector('.dropdown-toggle-fitur');

        const menu = dropdown.querySelector('.dropdown-menu-fitur');



        toggle.addEventListener('click', e => {

          e.stopPropagation();

          const isOpen = dropdown.getAttribute('aria-expanded') === 'true';

          closeAllDropdowns(dropdown);

          toggleDropdown(dropdown, !isOpen);

        });

        toggle.addEventListener('keydown', e => {

          if (e.key === "Enter" || e.key === " " || e.key === "ArrowDown") {

            e.preventDefault();

            closeAllDropdowns(dropdown);

            toggleDropdown(dropdown, true);

          }

          if (e.key === "Escape") {

            e.preventDefault();

            toggleDropdown(dropdown, false);

            toggle.focus();

          }

        });

        menu.addEventListener('keydown', e => {

          const items = Array.from(menu.querySelectorAll('.dropdown-item-fitur'));

          const currentIndex = items.indexOf(document.activeElement);



          if (e.key === "ArrowDown") {

            e.preventDefault();

            let nextIndex = (currentIndex + 1) % items.length;

            items[nextIndex].focus();

          } else if (e.key === "ArrowUp") {

            e.preventDefault();

            let prevIndex = (currentIndex - 1 + items.length) % items.length;

            items[prevIndex].focus();

          } else if (e.key === "Escape") {

            toggleDropdown(dropdown, false);

            toggle.focus();

          }

        });



        /* Close dropdown if click outside*/

        document.addEventListener('click', () => toggleDropdown(dropdown, false));

      }



      setupDropdown(regionDropdown);

      setupDropdown(desaDropdown);

      setupDropdown(tahunDropdown);



      /* Select item from dropdown*/

      function selectRegion(value) {

        selectedRegion = value;

        const labelSpan = regionDropdown.querySelector('.dropdown-toggle-fitur span');

        labelSpan.textContent = value || "Cari Region";

        filterCards();

      }

      function selectDesa(value) {

        selectedDesa = value;

        const labelSpan = desaDropdown.querySelector('.dropdown-toggle-fitur span');

        labelSpan.textContent = value || "Cari Desa/Kelurahan";

        filterCards();

      }



      /* Region dropdown item click*/

      regionDropdown.querySelectorAll('.dropdown-item-fitur').forEach(item => {

        item.addEventListener('click', e => {

          e.stopPropagation();

          selectRegion(item.textContent.trim());

          toggleDropdown(regionDropdown, false);

        });

      });

      /* Desa dropdown item click*/

      desaDropdown.querySelectorAll('.dropdown-item-fitur').forEach(item => {

        item.addEventListener('click', e => {

          e.stopPropagation();

          selectDesa(item.textContent.trim());

          toggleDropdown(desaDropdown, false);

        });

      });



      /* Tahun checkbox changes*/

      tahunDropdown.querySelectorAll('.dropdown-item-fitur input[type=checkbox]').forEach(checkbox => {

        checkbox.addEventListener('change', () => {

          if (checkbox.id === 'filter-semua') {

            if (checkbox.checked) {

              /* Uncheck others, set all*/

              tahunDropdown.querySelectorAll('.dropdown-item-fitur input[type=checkbox]').forEach(cb => {

                if (cb !== checkbox) cb.checked = false;

              });

              selectedTahun.clear();

              selectedTahun.add('all');

            } else {

              /* Prevent unchecking all - keep at least all or something*/

              checkbox.checked = true;

            }

          } else {

            if (checkbox.checked) {

              selectedTahun.add(checkbox.nextElementSibling.textContent.trim());

              /* Uncheck "Tampilkan Semua"*/

              tahunCheckboxAll.checked = false;

              selectedTahun.delete('all');

            } else {

              selectedTahun.delete(checkbox.nextElementSibling.textContent.trim());

              /* If none selected, revert to all just to be safe*/

              if (selectedTahun.size === 0) {

                tahunCheckboxAll.checked = true;

                selectedTahun.add('all');

              }

            }

          }

          updateSelectedTahunLabel();

          filterCards();

        });

      });



      function updateSelectedTahunLabel() {

        const labelSpan = tahunDropdown.querySelector('.dropdown-toggle-fitur span');

        if (selectedTahun.has('all')) {

          labelSpan.textContent = 'Filter Tahun';

        } else {

          labelSpan.textContent = Array.from(selectedTahun).sort().join(', ');

        }

      }



      /* Clear all filters button*/

      clearFiltersBtn.addEventListener('click', () => {

        selectedRegion = null;

        selectedDesa = null;

        selectedTahun.clear();

        selectedTahun.add('all');



        regionDropdown.querySelector('.dropdown-toggle-fitur span').textContent = "Cari Region";

        desaDropdown.querySelector('.dropdown-toggle-fitur span').textContent = "Cari Desa/Kelurahan";



        /* Reset tahun checkboxes*/

        tahunDropdown.querySelectorAll('.dropdown-item-fitur input[type=checkbox]').forEach(cb => {

          if (cb.id === 'filter-semua') {

            cb.checked = true;

          } else {

            cb.checked = false;

          }

        });

        updateSelectedTahunLabel();

        filterCards();

      });



      /* Filter cards based on selected filters*/

      function filterCards() {

        cards.forEach(card => {

          const cardRegion = card.getAttribute('data-region').toLowerCase();

          const cardDesa = card.getAttribute('data-desa').toLowerCase();

          const cardTahun = card.getAttribute('data-tahun');



          /* Region filter*/

          const regionMatch = !selectedRegion || cardRegion === selectedRegion.toLowerCase();



          /* Desa filter*/

          const desaMatch = !selectedDesa || cardDesa === selectedDesa.toLowerCase();



          /* Tahun filter*/

          let tahunMatch = true;

          if (!selectedTahun.has('all')) {

            tahunMatch = selectedTahun.has(cardTahun);

          }

          if (regionMatch && desaMatch && tahunMatch) {

            card.style.display = '';

          } else {

            card.style.display = 'none';

          }

        });

      }

    })();

  document.addEventListener("DOMContentLoaded", function () {
    const cardsPerPage = 6;
    const cardsContainer = document.querySelector(".monografi-list");
    const allCards = Array.from(cardsContainer.children);
    const paginationContainer = document.getElementById("pagination-container");
    let currentPage = 1;

    function showPage(page) {
      const start = (page - 1) * cardsPerPage;
      const end = start + cardsPerPage;

      allCards.forEach((card, index) => {
        card.style.display = index >= start && index < end ? "" : "none";
      });

      currentPage = page;
      updatePagination(page);
    }

    function updatePagination(activePage) {
      const totalPages = Math.ceil(allCards.length / cardsPerPage);
      paginationContainer.innerHTML = "";

      // Tombol Previous
      const prevLi = document.createElement("li");
      prevLi.classList.add("page-item");
      if (activePage === 1) prevLi.classList.add("disabled");

      const prevA = document.createElement("a");
      prevA.classList.add("page-link");
      prevA.href = "#";
      prevA.textContent = "Previous";
      prevA.addEventListener("click", function (e) {
        e.preventDefault();
        if (activePage > 1) showPage(activePage - 1);
      });

      prevLi.appendChild(prevA);
      paginationContainer.appendChild(prevLi);

      // Tombol Angka
      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement("li");
        li.classList.add("page-item");
        if (i === activePage) li.classList.add("active");

        const a = document.createElement("a");
        a.classList.add("page-link");
        a.href = "#";
        a.textContent = i;

        a.addEventListener("click", function (e) {
          e.preventDefault();
          showPage(i);
        });

        li.appendChild(a);
        paginationContainer.appendChild(li);
      }

      // Tombol Next
      const nextLi = document.createElement("li");
      nextLi.classList.add("page-item");
      if (activePage === totalPages) nextLi.classList.add("disabled");

      const nextA = document.createElement("a");
      nextA.classList.add("page-link");
      nextA.href = "#";
      nextA.textContent = "Next";
      nextA.addEventListener("click", function (e) {
        e.preventDefault();
        if (activePage < totalPages) showPage(activePage + 1);
      });

      nextLi.appendChild(nextA);
      paginationContainer.appendChild(nextLi);
    }

    // Inisialisasi tampilan halaman pertama
    showPage(1);
  });
