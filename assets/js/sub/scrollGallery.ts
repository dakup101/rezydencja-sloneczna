import Swiper from "swiper";
import 'swiper/css';

export default function scrollGallery(){
    console.log('--- Scroll Gallery loaded ---');

    // Props
    let scroller = 0;
    let scrollStep = 3;
    let scrollerCheck = false;
    let slideLength = document.querySelectorAll('.scroll-gallery__wrapper').length - 1;
    let activeSlide = 0;
    let progressBar = document.getElementById('progressBarFiller');
    let circleRadius = progressBar.getBoundingClientRect().width / 2;
    let circleArray = Math.PI * circleRadius * 2;
    progressBar.style.strokeDasharray = circleArray.toString();
    progressBar.style.strokeDashoffset = circleArray.toString();
    
    // Methods
    const gallery = new Swiper('.scroll-gallery', {
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 25,
        // spaceBetween: 25,
    })
    document.body.classList.add('stop-scrolling');
    document.body.addEventListener('wheel', checkScrollDirection);
    function checkScrollDirection(event) {
        if (!isScrollDone()){
            if (checkScrollDirectionIsUp(event)) {
                if (scroller!==0){
                    scroller--;
                    if (scroller%scrollStep == 0 && activeSlide!==0) activeSlide--;
                }
            } else {
                scroller++
                if (scroller % scrollStep ==0) activeSlide++;
            }
            let percentage = (scroller/(slideLength*scrollStep)*100);
            percentage = circleArray * (percentage / 100);
            percentage = circleArray - percentage;
            progressBar.style.strokeDashoffset=percentage.toString();
            gallery.slideTo(activeSlide);
        }
    }
    function checkScrollDirectionIsUp(event) {
        if (event.wheelDelta) {
            return event.wheelDelta > 0;
        }
        return event.deltaY < 0;
    }
    function isScrollDone(){
        if(scroller == slideLength*scrollStep){
            document.body.classList.remove('stop-scrolling');
            return true;
        }
        return false
    }
}