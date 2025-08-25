/**
 * Template Name: Appland
 * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
  "use strict";

  function toggleScrolled() {
    const selectBody = document.querySelector("body");
    const selectHeader = document.querySelector("#header");
    if (
      !selectHeader.classList.contains("scroll-up-sticky") &&
      !selectHeader.classList.contains("sticky-top") &&
      !selectHeader.classList.contains("fixed-top")
    )
      return;
    window.scrollY > 100
      ? selectBody.classList.add("scrolled")
      : selectBody.classList.remove("scrolled");
  }

  document.addEventListener("scroll", toggleScrolled);
  window.addEventListener("load", toggleScrolled);

  const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");
  function mobileNavToogle() {
    document.body.classList.toggle("mobile-nav-active");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener("click", mobileNavToogle);
  }

  document.querySelectorAll("#navmenu a").forEach((navmenu) => {
    navmenu.addEventListener("click", () => {
      if (document.querySelector(".mobile-nav-active")) {
        mobileNavToogle();
      }
    });
  });

  document.querySelectorAll(".navmenu .toggle-dropdown").forEach((item) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      this.parentElement.classList.toggle("active");
    });
  });

  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  let scrollTop = document.querySelector(".scroll-top");
  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    }
  }
  scrollTop.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
  window.addEventListener("load", toggleScrollTop);
  document.addEventListener("scroll", toggleScrollTop);

  function aosInit() {
    AOS.init({ duration: 600, easing: "ease-in-out", once: true, mirror: false });
  }
  window.addEventListener("load", aosInit);

  function initSwiper() {
  // Inisialisasi swiper jika elemen tersedia dan dilakukan saat idle
  requestIdleCallback(() => {
    // Hero Swiper
    const heroSwiperEl = document.querySelector(".hero-swiper");
    if (heroSwiperEl) {
      new Swiper(heroSwiperEl, {
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        grabCursor: true,
        effect: "slide",
      });
    }

    // Statistik Swiper
    const statsSwiperEl = document.querySelector(".stats-swiper");
    if (statsSwiperEl) {
      new Swiper(statsSwiperEl, {
        loop: true,
        grabCursor: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        slidesPerView: 1.2,
        spaceBetween: 16,
        breakpoints: {
          640: { slidesPerView: 2 },
          992: { slidesPerView: 3 },
          1200: { slidesPerView: 4 },
        },
      });
    }

    // infografis swiper
    const infografisSwiperEls = document.querySelectorAll('.infografis-swiper');
    infografisSwiperEls.forEach((swiperEl) => {
      new Swiper(swiperEl, {
        loop: true,
        navigation: {
          nextEl: swiperEl.querySelector('.swiper-button-next'),
          prevEl: swiperEl.querySelector('.swiper-button-prev'),
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 0,
      });
    });

  });
}

  

  window.addEventListener("load", initSwiper);

  // ========== Custom Gallery Script ==========
document.addEventListener('DOMContentLoaded', () => {
  const slide = document.querySelector('.gallery-slide');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const indicators = document.querySelectorAll('.indicator');

  if (!slide || slides.length === 0) return; // Galeri tidak ada, stop

  let currentIndex = 0;
  const slideCount = slides.length;
  let autoSlideInterval;
  const slideIntervalTime = 5000;

  function updateSliderPosition() {
    slide.style.transform = `translateX(-${currentIndex * 100}%)`;
    indicators.forEach((indicator, index) => {
      indicator.classList.toggle('active', index === currentIndex);
    });
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
    updateSliderPosition();
    resetAutoSlide();
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slideCount;
    updateSliderPosition();
    resetAutoSlide();
  }

  function goToSlide(index) {
    currentIndex = index;
    updateSliderPosition();
    resetAutoSlide();
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, slideIntervalTime);
  }

  function pauseAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  function resetAutoSlide() {
    pauseAutoSlide();
    startAutoSlide();
  }

  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => goToSlide(index));
  });

  if (prevBtn) prevBtn.addEventListener('click', prevSlide);
  if (nextBtn) nextBtn.addEventListener('click', nextSlide);

  const container = document.querySelector('.gallery-container');
  if (container) {
    container.addEventListener('mouseenter', pauseAutoSlide);
    container.addEventListener('mouseleave', startAutoSlide);
  }

  // Swipe gesture
  let touchStartX = 0, touchEndX = 0;
  slide.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX);
  slide.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    if (touchEndX < touchStartX - 50) nextSlide();
    if (touchEndX > touchStartX + 50) prevSlide();
  });

  startAutoSlide();
});


  const glightbox = GLightbox({ selector: ".glightbox" });

  document.querySelectorAll(".faq-item h3, .faq-item .faq-toggle").forEach((faqItem) => {
    faqItem.addEventListener("click", () => {
      faqItem.parentNode.classList.toggle("faq-active");
    });
  });

  window.addEventListener("load", function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: "smooth",
          });
        }, 100);
      }
    }
  });

  let navmenulinks = document.querySelectorAll(".navmenu a");
  function navmenuScrollspy() {
    navmenulinks.forEach((navmenulink) => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= section.offsetTop + section.offsetHeight) {
        document.querySelectorAll(".navmenu a.active").forEach((link) =>
          link.classList.remove("active")
        );
        navmenulink.classList.add("active");
      } else {
        navmenulink.classList.remove("active");
      }
    });
  }
  window.addEventListener("load", navmenuScrollspy);
  document.addEventListener("scroll", navmenuScrollspy);
})();

document.addEventListener('DOMContentLoaded', () => {
  const testimonialsSwiper = document.querySelector('.testimonials-swiper');
  if (testimonialsSwiper) {
    new Swiper(testimonialsSwiper, {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 2,
          spaceBetween: 20,
        }
      }
    });
  }
});


