const mobileHeader = document.querySelector(".header.header-mobile");
window.addEventListener("scroll", () => {
	if (window.scrollY >= 46) {
		mobileHeader.background = "#ffff";
	} else {
		mobileHeader.background = "transparent";
	}
});
