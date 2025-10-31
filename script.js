// Carousel Logic
const carousel = document.getElementById("nutCarousel");
const slides = carousel.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const titleEl = document.getElementById("carouselTitle");
const descEl = document.getElementById("carouselDesc");

let index = 0;
const total = slides.length;

function updateCarousel() {
  carousel.style.transform = `translateX(-${index * 100}%)`;

  dots.forEach((dot, i) => {
    dot.classList.toggle("bg-orange-500", i === index);
    dot.classList.toggle("bg-gray-300", i !== index);
  });

  const slide = slides[index];
  if (slide) {
    titleEl.textContent = slide.dataset.title || "";
    descEl.textContent = slide.dataset.desc || "";
  }
}

function nextSlide() {
  index = (index + 1) % total;
  updateCarousel();
}

// Dots click
dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    index = i;
    updateCarousel();
    resetInterval();
  });
});

let interval = setInterval(nextSlide, 4000);
function resetInterval() {
  clearInterval(interval);
  interval = setInterval(nextSlide, 4000);
}

// Initialize
updateCarousel();
