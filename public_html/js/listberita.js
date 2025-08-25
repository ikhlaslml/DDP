// Mobile menu toggle

  const mobileToggleBtn = document.querySelector(".mobile-toggle");

  const mobileMenu = document.getElementById("mobile-menu");

  mobileToggleBtn.addEventListener("click", () => {

    const expanded = mobileToggleBtn.getAttribute("aria-expanded") === "true" || false;

    mobileToggleBtn.setAttribute("aria-expanded", !expanded);

    if (mobileMenu.hasAttribute('hidden')) {

      mobileMenu.removeAttribute('hidden');

      mobileMenu.classList.add("show");

    } else {

      mobileMenu.setAttribute('hidden', '');

      mobileMenu.classList.remove("show");

    }

  });

function setupPagination(listClass, paginationId, itemsPerPage) {
  const container = document.querySelector(`.${listClass}`);
  if (!container) return;

  const items = Array.from(container.querySelectorAll(".news-item"));
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
