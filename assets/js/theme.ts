// On Load
console.log('--- Page Loaded ---')

import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
import scrollGalleryHandle from "./sub/scrollGallery-handle";
// handle dynamic load later
import manageFilters from "./sub/manageFilters";
import faq from "./sub/faq";
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
    scrollGalleryHandle();
    manageFilters();
    faq();
});
