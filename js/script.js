/*Scrolling Fixed Header*/
const header = document.querySelector('header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

/*Slideshow*/
var carouselEl = document.querySelector('#mainCarousel');
var carousel = new bootstrap.Carousel(carouselEl, {
  interval: 5000, /* Slide every 5 seconds*/
  pause: 'hover', /* Pause on hover*/
  wrap: true      /* Loop slides*/
});

