document.addEventListener('DOMContentLoaded', function () {
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navbar = document.querySelector('#navbar');

    mobileNavToggle.addEventListener('click', function () {
      navbar.classList.toggle('open');
    });
  });