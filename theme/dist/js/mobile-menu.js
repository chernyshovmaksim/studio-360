$(document).ready(function () {
    const hamburger = document.querySelector(".hamburger");
    const mobileMenu = document.querySelector(".mobile-menu");

    hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("mobile-menu--closed");
        hamburger.classList.toggle("hamburger--open");
        document.body.classList.toggle("body--locked");
    });
});
