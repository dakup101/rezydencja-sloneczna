// Import Modules
import Swiper, {Navigation} from "swiper";
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default function initSwiper(){
    const animSpeed = 500;
    const slidesCounter = document.querySelector('[data-slides_counter]') as HTMLElement;
    let activeSlide = parseInt(slidesCounter.dataset['slide']);
    let wholeSlides = parseInt(slidesCounter.dataset['slides']);

    console.log('--- Swiper Loaded ---')
    // Creating Instanc
    const swiper = new Swiper('.swiper', {
        // configure Swiper to use modules
        modules: [Navigation],
        direction: 'horizontal',
        speed: animSpeed,
        slidesPerView: 4,
        initialSlide: 2,
        spaceBetween: 25,
        // centeredSlides: true,
        // loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    // Methods
    swiper.on("slideNextTransitionStart", ()=>{
        activeSlide++;
        slidesCounter.innerHTML = activeSlide + '/' + wholeSlides;
    })
    swiper.on("slidePrevTransitionStart", ()=>{
        activeSlide--;
        slidesCounter.innerHTML = activeSlide + '/' + wholeSlides;
    })
}