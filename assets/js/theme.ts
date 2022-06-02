// On Load
console.log('--- Page loaded ---')

import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
import scrollGalleryHandle from "./sub/scrollGallery-handle";
// Rendered
window.scrollTo(0, 0);
window.addEventListener('DOMContentLoaded', () => {
    console.log('--- Page rendered ---')
    introAnimationHandle();
    swiperHandle();
    let scroller = 0;
    scrollEvents();
    apartamentTableSortHandle();
    contactFormHandle();
    scrollGalleryHandle();
});
