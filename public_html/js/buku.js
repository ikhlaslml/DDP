document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".book-card");
  const cardsPerPage = 6;
  let currentPage = 1;
  const totalPages = Math.ceil(cards.length / cardsPerPage);

  const pagination = document.getElementById("pagination");
  const prevPage = document.getElementById("prev-page");
  const nextPage = document.getElementById("next-page");

  function showPage(page) {
  const start = (page - 1) * cardsPerPage;
  const end = start + cardsPerPage;

  cards.forEach((card, index) => {
    card.style.display = index >= start && index < end ? "" : "none";
  });

  // Hapus semua class 'active' dari li.page-number
  document.querySelectorAll("#pagination .page-number").forEach(li => li.classList.remove("active"));

  // Tambahkan class 'active' ke li yang memiliki anak a[data-page = page]
  const activeLi = document.querySelector(`#pagination .page-number a[data-page="${page}"]`)?.parentElement;
  if (activeLi) activeLi.classList.add("active");

  prevPage.classList.toggle("disabled", page === 1);
  nextPage.classList.toggle("disabled", page === totalPages);
}


  function createPagination() {
    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement("li");
      li.className = `page-item page-number${i === 1 ? " active" : ""}`;
      li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
      pagination.insertBefore(li, nextPage);
    }

    pagination.addEventListener("click", function (e) {
      e.preventDefault();
      const target = e.target;
      if (target.tagName === "A") {
        if (target.parentElement.id === "prev-page" && currentPage > 1) {
          currentPage--;
        } else if (target.parentElement.id === "next-page" && currentPage < totalPages) {
          currentPage++;
        } else if (target.dataset.page) {
          currentPage = parseInt(target.dataset.page);
        }
        showPage(currentPage);
      }
    });
  }

  createPagination();
  showPage(currentPage);
});

setupPagination("cards-wrapper", "pagination-infografis", 6);

