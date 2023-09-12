// smooth scroll
$(document).ready(function () {
  $(".navbar .nav-link").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        0,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });
});

// navbar toggle
$("#nav-toggle").click(function () {
  $(this).toggleClass("is-active");
  $("ul.nav").toggleClass("show");
});

// Hide Body
document.onkeydown = function (e) {
  if (event.keyCode == 123) {
    return false;
  }

  if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
    return false;
  }

  if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
    return false;
  }

  if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
    return false;
  }
};

// Swiper
var swiper = new Swiper(".content", {
  slidesPerView: 3,
  spaceBetween: 20,
  grabCursor: "true",
  // Pagination Added
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Responsive Breakpoint Added
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});
