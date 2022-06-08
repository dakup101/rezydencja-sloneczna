// On Load
import faq from "./sub/faq";

console.log('--- Page Loaded ---')

import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
import scrollGalleryHandle from "./sub/scrollGallery-handle";
import faqHandle from "./sub/faq-handle";
import manageFiltersHandle from "./sub/manageFilters-handle";

// Before Render

// -- Enviroment
// -- True / True - for demo
// -- True / False - for prod
// -- False / False for dev
const is_prod = true;
const is_demo = true;

// -- Reset page position to always to
window.scrollTo(0, 0);
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
let viewportWidth = window.innerWidth;

// Rendered
window.addEventListener('DOMContentLoaded', () => {
    console.log('--- Page Rendered ---')
    introAnimationHandle();
    swiperHandle();
    let scroller = 0;
    scrollEvents();
    apartamentTableSortHandle();
    contactFormHandle();
    scrollGalleryHandle();
    faqHandle();
    manageFiltersHandle()

    let mobileNavTrigger = document.getElementById('mobileMenu');
    mobileNavTrigger.addEventListener('change', ()=>{
        document.querySelector('[data-site_header]').classList.toggle('darken')
    })
});

export {viewportWidth, is_demo, is_prod};
