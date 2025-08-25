document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".news-card");
  const cardsPerPage = 3;
  let currentPage = 1;
  const totalPages = Math.ceil(cards.length / cardsPerPage);
  const pagination = document.getElementById("pagination-news");

  function showPage(page) {
    const start = (page - 1) * cardsPerPage;
    const end = start + cardsPerPage;

    cards.forEach((card, index) => {
      card.style.display = index >= start && index < end ? "" : "none";
    });

    // Update active class
    document.querySelectorAll("#pagination-news .page-link").forEach(btn =>
      btn.classList.remove("active")
    );
    const activeBtn = document.querySelector(`#pagination-news .page-link[data-page="${page}"]`);
    if (activeBtn) activeBtn.classList.add("active");
  }

  function createPagination() {
    pagination.innerHTML = "";

    // Previous Button
    const prevLi = document.createElement("li");
    prevLi.innerHTML = `<a href="#" class="page-link" data-page="prev">Previous</a>`;
    pagination.appendChild(prevLi);

    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement("li");
      li.innerHTML = `<a href="#" class="page-link${i === 1 ? " active" : ""}" data-page="${i}">${i}</a>`;
      pagination.appendChild(li);
    }

    // Next Button
    const nextLi = document.createElement("li");
    nextLi.innerHTML = `<a href="#" class="page-link" data-page="next">Next</a>`;
    pagination.appendChild(nextLi);

    pagination.addEventListener("click", function (e) {
      e.preventDefault();
      const target = e.target;
      if (!target.classList.contains("page-link")) return;

      const page = target.dataset.page;
      if (page === "prev" && currentPage > 1) {
        currentPage--;
      } else if (page === "next" && currentPage < totalPages) {
        currentPage++;
      } else if (!isNaN(page)) {
        currentPage = parseInt(page);
      }
      showPage(currentPage);
    });
  }

  createPagination();
  showPage(currentPage);
});

// Mobile nav toggle

        const hamburger = document.querySelector('.hamburger');

        const mobileNav = document.querySelector('.mobile-nav');

        const closeBtn = document.querySelector('.mobile-nav .close-btn');



        hamburger.addEventListener('click', () => {

            const expanded = hamburger.getAttribute('aria-expanded') === 'true' || false;

            hamburger.setAttribute('aria-expanded', !expanded);

            mobileNav.style.display = 'flex';

        });



        closeBtn.addEventListener('click', () => {

            hamburger.setAttribute('aria-expanded', 'false');

            mobileNav.style.display = 'none';

        });



        // Accessibility: Close mobile nav on ESC key

        document.addEventListener('keydown', (e) => {

            if (e.key === 'Escape' && mobileNav.style.display === 'flex') {

                hamburger.setAttribute('aria-expanded', 'false');

                mobileNav.style.display = 'none';

                hamburger.focus();

            }

        });



        // Mobile dropdown toggle

        [...mobileNav.querySelectorAll('.dropdown > a')].forEach(dropdownToggle => {

            dropdownToggle.addEventListener('click', (e) => {

                e.preventDefault();

                const menu = dropdownToggle.nextElementSibling;

                if(menu.style.display === 'flex') {

                    menu.style.display = 'none';

                    dropdownToggle.setAttribute('aria-expanded', 'false');

                } else {

                    menu.style.display = 'flex';

                    dropdownToggle.setAttribute('aria-expanded', 'true');

                }

            });

        });