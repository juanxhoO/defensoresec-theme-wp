window.addEventListener('load', function () {

  jQuery(document).ready(function($) {
    $('.menu-item-has-children').hover(function() {
      $(this).find('.sub-menu').stop(true, true).fadeIn(200);
    }, function() {
        $(this).find('.sub-menu').stop(true, true).fadeOut(200);
    });
});
      // Get references to elements
      const main_navigation = document.querySelector('.menu-bar');
      const primaryMenuToggle = document.querySelector('#primary-menu-toggle');
      const closeMenuToggle = document.querySelector('#close-menu-toggle');
      const overlay = document.querySelector('.overlay');
      const navbar = document.querySelector('.nav-bar');
      const header = document.querySelector('header');

      // Calculate the navbar height once
  
      // Toggle menu on primary menu toggle click
      primaryMenuToggle.addEventListener('click', function (e) {
          e.preventDefault();
          main_navigation.classList.toggle('open');
          closeMenuToggle.classList.toggle('show');
          overlay.style.display = 'block';
      });
  
      // Close menu on close menu toggle click
      closeMenuToggle.addEventListener('click', function (e) {
          e.preventDefault();
          this.classList.remove('show');
          main_navigation.classList.remove('open');
          overlay.style.display = 'none';
      });
  
      // Close menu on overlay click
      overlay.addEventListener('click', function (e) {
          e.preventDefault();
          closeMenuToggle.classList.remove('show');
          main_navigation.classList.remove('open');
          overlay.style.display = 'none';
      });
  
      // Scroll event listener
      window.addEventListener('scroll', function () {
            const navbarHeight = header.offsetHeight;  
          // Example: Add a class to the header when scrolling past the navbar height
          if (window.scrollY > (navbarHeight + 200)) {
            navbar.classList.add('fixed');
          } else {
            navbar.classList.remove('fixed');
          }
      });
  });