export default function blogTags() {
	const slider = document.querySelector(".blog-tags") as HTMLElement;
	let isDown = false;
	let startX;
	let scrollLeft;

	slider.addEventListener("mousedown", (e: MouseEvent) => {
		isDown = true;
		slider.classList.add("active");
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
		if (isLinkElement(e.target)) {
			e.preventDefault(); // Prevent link navigation on mouse down
		}
	});

	slider.addEventListener("mouseleave", () => {
		isDown = false;
		slider.classList.remove("active");
	});

	slider.addEventListener("mouseup", () => {
		isDown = false;
		slider.classList.remove("active");
	});

	slider.addEventListener("mousemove", (e) => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const walk = (x - startX) * 3; // scroll-fast
		slider.scrollLeft = scrollLeft - walk;
		console.log(walk);
	});

	function isLinkElement(element) {
		return element.tagName.toLowerCase() === "a" || element.closest("a");
	}
}
