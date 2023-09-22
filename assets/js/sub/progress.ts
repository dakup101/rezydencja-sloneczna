// Import Modules
import Swiper, { Navigation } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

export default function initProgress() {
	const animSpeed = 500;

	console.log("--- Progress Loaded ---");
	// Creating Instanc
	const swiper = new Swiper(".progress-build .swiper", {
		// configure Swiper to use modules
		modules: [Navigation],
		direction: "horizontal",
		speed: animSpeed,
		slidesPerView: 3,
		spaceBetween: 100,
		// centeredSlides: true,
		// loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			1240: {
				slidesPerView: 3,
				initialSlide: 2,
				spaceBetween: 30,
			},
			991: {
				slidesPerView: 2.5,
				initialSlide: 1,
				spaceBetween: 25,
			},
			320: {
				slidesPerView: 1.25,
				initialSlide: 1,
				spaceBetween: 20,
			},
		},
	});
}
