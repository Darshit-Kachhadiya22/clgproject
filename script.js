// JavaScript code for toggle button

const navLinks = document.getElementById("nav-links");
const toggleButton = document.getElementById("nav-toggle");

toggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});
