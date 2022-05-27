// On Load
import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactForm from "./sub/contactForm";
// Rendered
window.addEventListener('DOMContentLoaded', () => {
    introAnimationHandle();
    swiperHandle();
    scrollEvents();
    apartamentTableSortHandle();
    contactForm();
});
