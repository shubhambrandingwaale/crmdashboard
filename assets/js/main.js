$(document).ready(function () {
  $("#open_nav").click(function () {
    console.log("clicked toggle_btn");
    $(".mobile_device").addClass("active");
  });
  $("#close_nav").click(function () {
    console.log("clicked toggle_close");
    $(".mobile_device").removeClass("active");
  });
});

var heroSwiper = new Swiper(".hero-slider", {
  speed: 600,
  loop: true,
  parallax: true,
  pagination: {
    el: ".hero-swiper-pagination",
    clickable: true,
  },
});

$(".product_slider").slick({
  dots: false,
  arrows: false,
  infinite: false,
  autoplay: true,
  speed: 300,
  slidesToShow: 2.4,
  loop: true,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

var swiper = new Swiper(".product-icons", {
  spaceBetween: 10,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".product-images", {
  spaceBetween: 10,
  loop: true,
  arrows: false,
  effect: "fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

$(document).ready(function () {
  $(".image-link").magnificPopup({ type: "image" });
});

var swiper = new Swiper(".client-slider", {
  slidesPerView: 2,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 3000,
  },
  // infinite: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    425: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },
});

$(window).on("scroll", function () {
  function isScrollIntoView(elem, index) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(window).height() * 0.5;
    if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
      $(elem).addClass("active");
    }
    if (!(elemBottom <= docViewBottom)) {
      $(elem).removeClass("active");
    }
    var MainTimelineContainer = $("#vertical-scrollable-timeline")[0];
    var MainTimelineContainerBottom =
      MainTimelineContainer.getBoundingClientRect().bottom -
      $(window).height() * 0.5;
    $(MainTimelineContainer)
      .find(".inner")
      .css("height", MainTimelineContainerBottom + "px");
  }
  var timeline = $("#vertical-scrollable-timeline li");
  Array.from(timeline).forEach(isScrollIntoView);
});

var swiper = new Swiper(".certificate-slider", {
  slidesPerView: 3,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});

// toggle profile capsule
document
  .querySelector(".profile-download")
  .addEventListener("click", function () {
    document
      .querySelector(".download-profile-capsule")
      .classList.toggle("active");
  });
