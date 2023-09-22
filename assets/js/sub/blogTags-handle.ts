export default function blogTagsHandle() {
	let swiperWrapper = document.querySelector(".blog-tags");
	if (swiperWrapper) {
		import(/* webpackChunkName: "print" */ "./blogTags").then((module) => {
			const initSwiper = module.default;
			initSwiper();
		});
	}
}
