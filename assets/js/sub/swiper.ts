// Import Modules
import Swiper, { Navigation } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

export default function initSwiper() {
	const animSpeed = 500;

	console.log("--- Swiper Loaded ---");
	// Creating Instanc
	const swiper = new Swiper(".offer-slider .swiper", {
		// configure Swiper to use modules
		modules: [Navigation],
		direction: "horizontal",
		speed: animSpeed,
		slidesPerView: 4,
		initialSlide: 2,
		spaceBetween: 25,
		// centeredSlides: true,
		// loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			1240: {
				slidesPerView: 4,
				initialSlide: 2,
				spaceBetween: 25,
			},
			991: {
				slidesPerView: 3,
				initialSlide: 1,
			},
			320: {
				slidesPerView: 1,
				initialSlide: 1,
			},
		},
	});
}
