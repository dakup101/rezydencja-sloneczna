// On Load
import introAnimationHandle from "./sub/introAnimation-handle";
import scrollEvents from "./sub/scrollEvents";
// Rendered
window.addEventListener('DOMContentLoaded', () => {
    introAnimationHandle();
    scrollEvents();
});
