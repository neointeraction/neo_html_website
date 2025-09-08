// animation transition init

AOS.init({ anchorPlacement: "bottom" });

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
  cssEase: "linear",
  autoplay: true,
});

// count

// Check if element is in viewport
const isElementInViewport = (el) => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const countUp = (el, target) => {
  let count = 0;
  // For the '1b+' label, we want a very fast count to 1, then we'll append the 'b+'
  const step = Math.ceil(target / (target > 10 ? 100 : 20));
  const interval = setInterval(() => {
    count += step;
    if (count >= target) {
      clearInterval(interval);
      count = target;
    }
    if (el.dataset.target === "1") {
      el.textContent = count + "b+";
    } else {
      el.textContent = count + "+";
    }
  }, 20); // Adjust interval for speed
};

const startCountUp = () => {
  const countElements = document.querySelectorAll(".count-number");
  countElements.forEach((el) => {
    if (isElementInViewport(el) && !el.classList.contains("counted")) {
      const target = parseInt(el.dataset.target);
      countUp(el, target);
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

  if (!navbar) return; // Prevent errors if navbar doesn't exist

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
