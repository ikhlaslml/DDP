// AUTO SLIDE FUNCTION FOR ALL SLIDERS
  const sliderContainers = document.querySelectorAll(".slider-container");
  sliderContainers.forEach(slider => {
    let scrollPos = 0;
    let maxScrollLeft = slider.scrollWidth - slider.clientWidth;
    let scrollStep = 1; // pixels per interval
    let direction = 1; // 1 = right, -1 = left
    let slidesCount = slider.querySelectorAll("img, div").length;

    // Show current slide indicator if exists
    const indicator = slider.parentElement.querySelector("div.absolute.bottom-2.right-3");
    const updateIndicator = (pos) => {
      if (!indicator) return;
      // index approximate
      const slideWidth = slider.clientWidth;
      // Calculate current snap based on scrollLeft and slide width
      // In this layout, slides are full width, so scrollLeft / slideWidth will give index
      let index = Math.round(pos / slideWidth) + 1;
      if(index > slidesCount) index = slidesCount;
      if(index < 1) index = 1;
      indicator.textContent = `${index} / ${slidesCount}`;
    };
    updateIndicator(0);

    // Autoscroll interval
    const stepTime = 20;
    const maxStep = slider.scrollWidth - slider.clientWidth;

    const scrollInterval = setInterval(() => {
      // next scroll position with direction and step
      scrollPos += direction * scrollStep;
      if (scrollPos >= maxStep) {
        scrollPos = maxStep;
        direction = -1;
      } else if (scrollPos <= 0) {
        scrollPos = 0;
        direction = 1;
      }
      slider.scrollLeft = scrollPos;
      updateIndicator(scrollPos);
    }, stepTime);

    // Pause slider on hover
    slider.addEventListener("mouseenter", () => clearInterval(scrollInterval));
    slider.addEventListener("mouseleave", () => {
      setInterval(() => {
        scrollPos += direction * scrollStep;
        if (scrollPos >= maxStep) {
          scrollPos = maxStep;
          direction = -1;
        } else if (scrollPos <= 0) {
          scrollPos = 0;
          direction = 1;
        }
        slider.scrollLeft = scrollPos;
        updateIndicator(scrollPos);
      }, stepTime);
    });
  });

  // Scroll to top button visible toggle
  const topButton = document.getElementById('topButton');
  window.addEventListener('scroll', () => {
    if(window.scrollY > 400) {
      topButton.style.display = 'block';
    } else {
      topButton.style.display = 'none';
    }
  });
  topButton.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
  });


const accordionCollapseElementList = document.querySelectorAll('#myAccordion .collapse')
const accordionCollapseList = [...accordionCollapseElementList].map(accordionCollapseEl => new bootstrap.Collapse(accordionCollapseEl))