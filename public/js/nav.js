const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu-new");
const navLink = document.querySelectorAll(".nav-link-new");

console.log(hamburger);
if (hamburger) {
  hamburger.addEventListener("click", mobileMenu);
}
if (navLink) {
  navLink.forEach(n => n.addEventListener("click", closeMenu));
}

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
