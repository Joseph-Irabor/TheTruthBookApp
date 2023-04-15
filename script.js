const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

// Show the first slide and hide the rest
slides[currentSlide].style.display = 'block';

// Handle Next button click
document.getElementById('next').addEventListener('click', () => {
  slides[currentSlide].style.display = 'none';
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].style.display = 'block';
});

// Handle Previous button click
document.getElementById('prev').addEventListener('click', () => {
  slides[currentSlide].style.display = 'none';
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slides[currentSlide].style.display = 'block';
});