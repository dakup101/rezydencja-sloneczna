// On Load
console.log('--- Page Loaded ---')

import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
import scrollGallery from "./sub/scroll-gallery";
// Rendered
window.scrollTo(0, 0);
window.addEventListener('DOMContentLoaded', () => {
    console.log('--- Page Rendered ---')
    introAnimationHandle();
    swiperHandle();
    let scroller = 0;
    scrollEvents();
    apartamentTableSortHandle();
    contactFormHandle();
    scrollGallery();
});
