document.addEventListener("DOMContentLoaded", function() {
  var menuBtn = document.getElementById("menuBtn");
  var mobileNavbar = document.getElementById("mobile-navbar");

  menuBtn.addEventListener("click", function() {
    mobileNavbar.classList.toggle("active");
  });
});