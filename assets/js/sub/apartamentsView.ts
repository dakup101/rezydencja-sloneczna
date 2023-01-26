export default function apartamentsView() {
	const viewBtns = document.querySelectorAll(".change-search-view");
	const views = document.querySelectorAll(".apartaments-view-element");
	Array.from(viewBtns).forEach((btn) => {
		btn.addEventListener("click", (ev) => {
			ev.preventDefault();
			Array.from(views).forEach((view) => {
				view.classList.remove("active");
			});
			Array.from(viewBtns).forEach((viewBtn) => {
				viewBtn.classList.remove("active");
			});
			let targetView = btn.getAttribute("data-view");
			document.querySelector("." + targetView).classList.add("active");
			btn.classList.add("active");
		});
	});
}
