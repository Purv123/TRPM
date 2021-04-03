window.addEventListener("load", () => {
	const headings = [...document.getElementsByClassName("heading")];
	const pinwheel = document.querySelector(".pinwheel svg");
	pinwheel.classList.add("spin");
	for (let i = 0; i < headings.length; i++) {
		let timeout = setTimeout(() => {
			headings[i].classList.add("show-heading");
		}, i * 1 * 1000);
	}
});