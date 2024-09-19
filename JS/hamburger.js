const hamburger = document.getElementById("hamburger");
const navContainer = document.getElementById("nav-container");

hamburger.addEventListener("click", () => {
    navContainer.classList.toggle("show");
});

const navLinks = document.querySelectorAll(".nav-links a");

navLinks.forEach((link) => {
    link.addEventListener("click", function () {
        navLinks.forEach((nav) => nav.classList.remove("active"));
        this.classList.add("active");
    });
});