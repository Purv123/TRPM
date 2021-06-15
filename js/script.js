window.addEventListener("load", () => {
	const headings = [...document.getElementsByClassName("heading")];
	const pinwheel = document.querySelector(".pinwheel svg");
	pinwheel.classList.add("spin");
	for (let i = 0; i < headings.length; i++) {
		let timeout = setTimeout(() => {
			headings[i].classList.add("show-heading");
		}, i * 1 * 1000);
	}

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