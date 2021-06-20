window.addEventListener("load", () => {
	const headings = [...document.getElementsByClassName("heading")];
	for (let i = 0; i < headings.length / 2; i++) {
		let timeout = setTimeout(() => {
			headings[i].classList.add("show-heading");
			headings[i + (headings.length / 2)].classList.add("show-heading");
		}, i * 1 * 1000);
	}

	const pinwheels = [...document.querySelectorAll(".pinwheel svg")];
	pinwheels.forEach(pinwheel => pinwheel.classList.add("spin"));

	const navbarToggler = document.querySelector(".navbar-toggler");
	const navItems = document.querySelector("#navbarToggler");
	navbarToggler.addEventListener('click', () => {
		const navItemsClassList = navItems.classList;
		if (navItemsClassList.contains('collapsed')) {
			navItemsClassList.remove('collapsed')
		} else {
			navItemsClassList.add('collapsed')
		}
	});
});