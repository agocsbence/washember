//mobile menu 
var hamburger = document.querySelector(".hamburger");
var mobileMenu = document.getElementById("mobileMenu");
var mobileNavbar = document.getElementById("mobileNavbar");
var body = document.getElementsByTagName("BODY")[0];
hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobileNavbar.classList.toggle('opened');
    body.classList.toggle('lock-scroll');
});