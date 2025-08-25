  const searchInput = document.getElementById("searchInput");
  const sortSelect = document.getElementById("sortSelect");
  const cardsContainer = document.querySelector(".card-grid");
  const cards = Array.from(cardsContainer.children);

  function filterAndSortCards() {
    const query = searchInput.value.toLowerCase();
    const sortOrder = sortSelect.value;

    let filtered = cards.filter(card => {
      const title = card.dataset.title.toLowerCase();
      const author = card.dataset.author.toLowerCase();
      const abstract = card.dataset.abstract.toLowerCase();
      return title.includes(query) || author.includes(query) || abstract.includes(query);
    });

    filtered.sort((a, b) => {
      const yearA = parseInt(a.dataset.year);
      const yearB = parseInt(b.dataset.year);
      return sortOrder === "asc" ? yearA - yearB : yearB - yearA;
    });

    cardsContainer.innerHTML = "";
    filtered.forEach(card => cardsContainer.appendChild(card));
  }

  searchInput.addEventListener("input", filterAndSortCards);
  sortSelect.addEventListener("change", filterAndSortCards);

  document.addEventListener("DOMContentLoaded", function () {
    setupPagination("card-grid", "pagination-jurnal", 6); // tampilkan 6 kartu per halaman
  });

  function setupPagination(listClass, paginationId, itemsPerPage) {
    const container = document.querySelector(`.${listClass}`);
    if (!container) return;

    const items = Array.from(container.children);
    const paginationContainer = document.getElementById(paginationId);
    let currentPage = 1;

    function showPage(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;

      items.forEach((item, index) => {
        item.style.display = index >= start && index < end ? "" : "none";
      });

      currentPage = page;
      updatePagination();
    }

    function updatePagination() {
      const totalPages = Math.ceil(items.length / itemsPerPage);
      paginationContainer.innerHTML = "";

      // Previous
      const prevLi = document.createElement("li");
      prevLi.classList.add("page-item");
      if (currentPage === 1) prevLi.classList.add("disabled");

      const prevA = document.createElement("a");
      prevA.classList.add("page-link");
      prevA.href = "#";
      prevA.textContent = "Previous";
      prevA.onclick = e => {
        e.preventDefault();
        if (currentPage > 1) showPage(currentPage - 1);
      };

      prevLi.appendChild(prevA);
      paginationContainer.appendChild(prevLi);

      // Numbered pages
      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement("li");
        li.classList.add("page-item");
        if (i === currentPage) li.classList.add("active");

        const a = document.createElement("a");
        a.classList.add("page-link");
        a.href = "#";
        a.textContent = i;

        a.onclick = e => {
          e.preventDefault();
          showPage(i);
        };

        li.appendChild(a);
        paginationContainer.appendChild(li);
      }

      // Next
      const nextLi = document.createElement("li");
      nextLi.classList.add("page-item");
      if (currentPage === totalPages) nextLi.classList.add("disabled");

      const nextA = document.createElement("a");
      nextA.classList.add("page-link");
      nextA.href = "#";
      nextA.textContent = "Next";
      nextA.onclick = e => {
        e.preventDefault();
        if (currentPage < totalPages) showPage(currentPage + 1);
      };

      nextLi.appendChild(nextA);
      paginationContainer.appendChild(nextLi);
    }

    showPage(1);
  }

