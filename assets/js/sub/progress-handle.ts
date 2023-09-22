export default function progressHandle() {
	let swiperWrapper = document.querySelector(".progress-build .swiper");
	if (swiperWrapper) {
		import(/* webpackChunkName: "print" */ "./progress").then((module) => {
			const initSwiper = module.default;
			initSwiper();
		});
	}
}
