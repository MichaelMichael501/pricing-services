document.addEventListener('DOMContentLoaded', function () {
    var burgerMenu = document.querySelector('.burger-menu');
    var navigation = document.querySelector('.navigation');

    burgerMenu.addEventListener('click', function () {
      navigation.classList.toggle('active');
    });
  });