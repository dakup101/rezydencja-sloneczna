export default function lightboxHandle() {
	if (!document.querySelectorAll(".glightbox")) return;
	import(/* webpackChunkName: "print" */ "../sub/lightbox").then((module) => {
		const initImported = module.default;
		initImported();
	});
}