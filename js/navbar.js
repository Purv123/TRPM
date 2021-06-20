window.addEventListener("load", () => {
    const dropdownToggles = [...document.querySelectorAll('.dropdown-toggle')];

    const toggleDropdownMenu = (event) => {
        const dropdownMenu = event.target.nextElementSibling;
        const isDropdownVisible = window.getComputedStyle(dropdownMenu).getPropertyValue('display') === 'block';
        dropdownMenu.style.display = isDropdownVisible ? 'none' : 'block';
    }

    dropdownToggles.forEach(dropdownToggle => {
        dropdownToggle.addEventListener('click', toggleDropdownMenu);
    });
});