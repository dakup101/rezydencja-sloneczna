export default function apartamentsViewHandle() {
	let tableWrapper = document.querySelector(".apartaments-filters-view");
	if (tableWrapper) {
		import(/* webpackChunkName: "print" */ "./apartamentsView").then(
			(module) => {
				const initTableSort = module.default;
				initTableSort();
			}
		);
	}
}
