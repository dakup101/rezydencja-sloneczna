// On Load
import faq from "./sub/faq";

console.log("--- Page Loaded ---");

import introAnimationHandle from "./sub/introAnimation-handle";
import swiperHandle from "./sub/swiper-handle";
import scrollEvents from "./sub/scrollEvents";
import apartamentTableSortHandle from "./sub/apartamentTableSort-handle";
import contactFormHandle from "./sub/contactForm-handle";
import scrollGalleryHandle from "./sub/scrollGallery-handle";
import faqHandle from "./sub/faq-handle";
import manageFiltersHandle from "./sub/manageFilters-handle";
import galleryScriptsHandle from "./sub/galleryScripts-handle";
import apartamentsViewHandle from "./sub/apartamentsView-handle";
// Before Render

// -- Environment
// -- True / True - for demo
// -- True / False - for prod
// -- False / False for dev
const is_prod = true;
const is_demo = false;
const ajaxUrl = "/wp-admin/admin-ajax.php";

// -- Reset page position to always to
window.scrollTo(0, 0);
if ("scrollRestoration" in history) {
	history.scrollRestoration = "manual";
}
let viewportWidth = window.innerWidth;
let siteStorage = localStorage;
// Rendered
window.addEventListener("DOMContentLoaded", () => {
	console.log("--- Page Rendered ---");
	introAnimationHandle();
	swiperHandle();
	scrollEvents();
	apartamentTableSortHandle();
	contactFormHandle();
	scrollGalleryHandle();
	faqHandle();
	manageFiltersHandle();
	galleryScriptsHandle();
	apartamentsViewHandle();
	let mobileNavTrigger = document.getElementById("mobileMenu");
	mobileNavTrigger.addEventListener("change", () => {
		document.querySelector("[data-site_header]").classList.toggle("darken");
	});
	rodoCheck();
});

function rodoCheck() {
	let rodoWrap = document.querySelector("[data-rodo_wrap]");
	if (!siteStorage.getItem("evrwhr_rz_storage_rodo")) {
		console.log("--- No RODO ---");
		rodoWrap.classList.add("show");
		rodoWrap.querySelector("[data-rodo]").addEventListener("click", (e) => {
			e.preventDefault();
			siteStorage.setItem("evrwhr_rz_storage_rodo", "1");
			rodoWrap.classList.remove("show");
			console.log("--- RODO Accept ---");
		});
	}
}

export { viewportWidth, is_demo, is_prod, ajaxUrl };
