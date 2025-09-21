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
  fade: false,
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

  // Handle custom button clicks to control the slider
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
    arrows: false, // Turn off default arrows
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

  // Handle custom button clicks to control the slider
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

document.addEventListener("DOMContentLoaded", function () {
  const caseStudyButton = document.getElementById("case-study-btn");
  const form = document.getElementById("caseStudyForm");
  const emailInput = document.getElementById("case-study-email");
  const submitBtn = document.getElementById("case-study-submit");
  const status = document.getElementById("case-study-status");

  let currentCaseType = "";

  // Handle case study button clicks - Using Bootstrap 4 jQuery syntax
  if (caseStudyButton) {
    caseStudyButton.addEventListener("click", function () {
      currentCaseType = this.getAttribute("data-case") || "all";
      // Bootstrap 4 way to show modal
      $("#caseStudyModal").modal("show");
    });
  }

  // Handle form submission
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const email = emailInput.value.trim();

      if (!email) {
        status.innerHTML =
          '<small class="text-danger">Please enter your email</small>';
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = "Processing...";

      // Google Form submission
      const GOOGLE_FORM_URL =
        "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";
      const GOOGLE_FORM_EMAIL_FIELD = "YOUR_TIMESTAMP_FIELD.1195398138"; // Replace with actual entry ID

      const formData = new FormData();
      formData.append(GOOGLE_FORM_EMAIL_FIELD, email);
      formData.append("entry.873621461", `Case Study - ${currentCaseType}`);
      formData.append("entry.894386", new Date().toISOString());

      // Submit to Google Form
      fetch(GOOGLE_FORM_URL, {
        method: "POST",
        mode: "no-cors", // Google Forms doesn't support CORS
        body: formData,
      })
        .then(() => {
          // Trigger PDF download after successful submission
          downloadCaseStudyPDF(currentCaseType);
          status.innerHTML =
            '<small class="text-success">Download started! Check your downloads folder.</small>';
          emailInput.value = "";

          // Close modal after successful submission
          setTimeout(() => {
            $("#caseStudyModal").modal("hide");
            status.innerHTML = "";
          }, 2000);
        })
        .catch(() => {
          // Even if error, assume submission worked (Google Forms blocks CORS)
          downloadCaseStudyPDF(currentCaseType);
          status.innerHTML =
            '<small class="text-success">Download started! Check your downloads folder.</small>';
          emailInput.value = "";

          setTimeout(() => {
            $("#caseStudyModal").modal("hide");
            status.innerHTML = "";
          }, 2000);
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.textContent = "Download Case Study";
        });
    });
  }

  // Function to download PDF
  function downloadCaseStudyPDF(caseType) {
    const link = document.createElement("a");
    const pdfMap = {
      all: "assets/pdfs/complete-case-study.pdf",
      usability: "assets/pdfs/improved-usability-case-study.pdf",
      ui: "assets/pdfs/user-centric-ui-case-study.pdf",
      flow1: "assets/pdfs/streamlined-user-flow-1-case-study.pdf",
      flow2: "assets/pdfs/streamlined-user-flow-2-case-study.pdf",
    };

    const pdfUrl = pdfMap[caseType] || "assets/pdfs/default-case-study.pdf";
    link.href = pdfUrl;
    link.download = `${caseType}-case-study.pdf`;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }

  // Clear status when modal is hidden (Bootstrap 4 syntax)
  $("#caseStudyModal").on("hidden.bs.modal", function () {
    if (status) status.innerHTML = "";
    if (emailInput) emailInput.value = "";
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.textContent = "Download Case Study";
    }
  });
});
