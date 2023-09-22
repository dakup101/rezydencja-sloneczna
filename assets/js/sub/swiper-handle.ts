export default function swiperHandle() {
	let swiperWrapper = document.querySelector(".offer-slider .swiper");
	if (swiperWrapper) {
		import(/* webpackChunkName: "print" */ "./swiper").then((module) => {
			const initSwiper = module.default;
			initSwiper();
		});
	}
}
