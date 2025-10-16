window.trackingData = {};

// slick

$(".testimonial-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: "linear",
  autoplay: true,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
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

$(".banner-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  // cssEase: "linear",
  autoplay: true,
  adaptiveHeight: true,
});

// about-project-block

$(document).ready(function () {
  $(".about-project-block").slick({
    dots: false,
    arrows: false, // Turn off default arrows
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
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

  $(".slick-next-custom").click(function () {
    $(".about-project-block").slick("slickNext");
  });

  $(".slick-prev-custom").click(function () {
    $(".about-project-block").slick("slickPrev");
  });
});

$(document).ready(function () {
  $(".life-at-neo-block").slick({
    dots: false,
    arrows: false, // Turn off default arrows
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
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

  // Handle custom button clicks to control the slider
  $(".slick-next-custom").click(function () {
    $(".life-at-neo-block").slick("slickNext");
  });

  $(".slick-prev-custom").click(function () {
    $(".life-at-neo-block").slick("slickPrev");
  });
});

$(document).ready(function () {
  $(".event-slider-block").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 800,
    slidesToShow: 2,
    slidesToScroll: 2,
    // fade: true,
    // cssEase: "linear",
    autoplay: true,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
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

  $(".slick-next-custom").click(function () {
    $(".event-slider-block").slick("slickNext");
  });

  $(".slick-prev-custom").click(function () {
    $(".event-slider-block").slick("slickPrev");
  });
});
// count

// Check if element is in viewport
const isElementInViewport = (el) => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const countUp = (el, target, suffix = "+") => {
  let count = 0;

  const step = Math.ceil(target / (target > 10 ? 100 : 20));
  const interval = setInterval(() => {
    count += step;
    if (count >= target) {
      clearInterval(interval);
      count = target;
    }
    if (el.dataset.type === "b") {
      el.textContent = count + "b+";
    } else if (el.dataset.type === "percent") {
      el.textContent = count + "%";
    } else {
      el.textContent = count + suffix;
    }
  }, 20);
};

const startCountUp = () => {
  const countElements = document.querySelectorAll(".count-number");
  countElements.forEach((el) => {
    if (isElementInViewport(el) && !el.classList.contains("counted")) {
      const target = parseInt(el.dataset.target);
      const suffix = el.dataset.suffix || "+";
      countUp(el, target, suffix);
      el.classList.add("counted");
    }
  });
};

window.addEventListener("scroll", startCountUp);
window.addEventListener("DOMContentLoaded", startCountUp);
window.addEventListener("resize", startCountUp);

// navbar

function handleNavbarScroll() {
  const navbar = document.querySelector(".navbar-container");

  if (!navbar) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
      navbar.classList.add("fixed");
    } else {
      navbar.classList.remove("fixed");
    }
  });
}

// Call the function after DOM is ready
document.addEventListener("DOMContentLoaded", handleNavbarScroll);

document.addEventListener("DOMContentLoaded", function () {
  // Handle case study button clicks
  document.querySelectorAll('.case-study-webview, .case-study-mobview').forEach(button => {
    button.addEventListener('click', function() {
      const projectTitle = this.getAttribute('data-project-title');
      const caseStudyUrl = this.getAttribute('data-case-study-url');
      if (projectTitle) {
        localStorage.setItem('enquiryType', projectTitle);
      }
      if (caseStudyUrl) {
        localStorage.setItem('caseStudyUrl', caseStudyUrl);
      }
      // Trigger the modal
      const caseStudyModalElement = document.getElementById('downloadCaseStudyModal'); // Corrected ID
      if (caseStudyModalElement) {
        const caseStudyModal = new bootstrap.Modal(caseStudyModalElement);
        caseStudyModal.show();
      }
    });
  });
});

(function() {
        'use strict';
        
        let buttonTrackingInitialized = false;

        function initializeButtonTracking() {
            if (buttonTrackingInitialized) {
                return;
            }
            
            buttonTrackingInitialized = true;

            // Handle "Book A Consultation" buttons
            const consultationBtns = document.querySelectorAll('.consultation-btn');
            consultationBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    localStorage.setItem('enquiryType', 'Book A Consultation');
                    console.log('Set enquiry type: Book A Consultation');
                });
            });

            // Handle "Hire Us" buttons
            const hireUsBtns = document.querySelectorAll('.hire-us-btn');
            hireUsBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const service = this.getAttribute('data-service') || 'General Service';
                    localStorage.setItem('enquiryType', `Hire Us - ${service}`);
                    console.log(`Set enquiry type: Hire Us - ${service}`);
                });
            });
        }

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeButtonTracking);
        } else {
            initializeButtonTracking();
        }
    })();
