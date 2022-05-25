export default function swiperHandle(){
    let swiperWrapper = document.querySelector('.swiper')
    if (swiperWrapper){
        import(/* webpackChunkName: "print" */ './swiper').then(module => {
            const initSwiper = module.default;
            initSwiper();
        });
    }
}