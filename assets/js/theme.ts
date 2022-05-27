// On Load
console.log('--- Page Loaded ---')
import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
// Rendered
window.addEventListener('DOMContentLoaded', () => {
    console.log('--- Page Rendered ---')
    introAnimationHandle();
    swiperHandle();
    scrollEvents();
    apartamentTableSortHandle();
    contactFormHandle();
});
