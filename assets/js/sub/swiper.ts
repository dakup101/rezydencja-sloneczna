// Import Modules
import Swiper, {Navigation, Pagination} from "swiper";
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default function initSwiper(){
    console.log('--- Swiper Loaded ---')
    // Creating Instance
    const swiper = new Swiper('.swiper', {
        // configure Swiper to use modules
        modules: [Navigation, Pagination],
        direction: 'horizontal',
        speed: 400,
        autoHeight: true,
        slidesPerView: 4,
        initialSlide: 3,
        spaceBetween: 25,
        // centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
}