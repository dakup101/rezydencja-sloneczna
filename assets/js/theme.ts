// On Load
import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSort from "./sub/apartamentTableSort";
// Rendered
window.addEventListener('DOMContentLoaded', () => {
    introAnimationHandle();
    swiperHandle()
    scrollEvents();
    apartamentTableSort()
});
