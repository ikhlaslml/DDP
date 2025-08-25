document.addEventListener("DOMContentLoaded", function () {
  const statsCards = document.getElementById("statsCards");
  const dotsContainer = document.getElementById("carouselDots");
  const cards = statsCards.querySelectorAll(".stat-card");
  const cardWidth = cards[0].offsetWidth + 16; // Tambah gap antar kartu
  const totalCards = cards.length;
  const visibleCards = Math.floor(statsCards.offsetWidth / cardWidth);
  const totalSlides = Math.ceil(totalCards / visibleCards);

  let currentSlide = 0;
  let autoScrollInterval = null;

  // === Buat bullet dots otomatis ===
  function generateDots() {
    dotsContainer.innerHTML = ""; // Kosongkan isi sebelumnya
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement("span");
      dot.classList.add("dot");
      if (i === 0) dot.classList.add("active");
      dot.dataset.index = i;
      dotsContainer.appendChild(dot);
    }
  }

  generateDots();
  let dots = dotsContainer.querySelectorAll(".dot");

  function updateActiveDot(index) {
    dots.forEach(dot => dot.classList.remove("active"));
    if (dots[index]) dots[index].classList.add("active");
  }

  function goToSlide(index) {
    statsCards.scrollTo({
      left: index * cardWidth * visibleCards,
      behavior: "smooth"
    });
    currentSlide = index;
    updateActiveDot(index);
  }

  function startAutoScroll() {
    autoScrollInterval = setInterval(() => {
      currentSlide = (currentSlide + 1) % totalSlides;
      goToSlide(currentSlide);
    }, 4000);
  }

  function stopAutoScroll() {
    clearInterval(autoScrollInterval);
  }

  // Klik dot manual
  dotsContainer.addEventListener("click", function (e) {
    if (e.target.classList.contains("dot")) {
      stopAutoScroll();
      goToSlide(parseInt(e.target.dataset.index));
      startAutoScroll();
    }
  });

  // Sync scroll manual
  statsCards.addEventListener("scroll", () => {
    const index = Math.round(statsCards.scrollLeft / (cardWidth * visibleCards));
    updateActiveDot(index);
    currentSlide = index;
  });

  // Pause saat hover
  statsCards.addEventListener("mouseenter", stopAutoScroll);
  statsCards.addEventListener("mouseleave", startAutoScroll);

  // Jalankan
  startAutoScroll();
});
