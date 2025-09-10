<!-- footer  -->
<footer class="footer">
  <div class="container">
    <!-- Top Section -->
    <div class="row align-items-start pb-4">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="d-flex align-items-center mb-3">
          <img src="assets/images/footer-logo.svg" alt="footer" />
        </div>
      </div>
      <div class="col-12 col-md-6 text-md-end footer-social-icons">
        <a href="#"><img src="assets/images/social/linkedin.svg" alt="linkedin" /></a>
        <a href="#"><img src="assets/images/social/ig.svg" alt="ig" /></a>
        <a href="#"><img src="assets/images/social/fb.svg" alt="fb" /></a>
        <a href="#"><img src="assets/images/social/db.svg" alt="db" /></a>
        <a href="#"><img src="assets/images/social/med.svg" alt="medium" /></a>
      </div>
    </div>

    <p class="footer-text text-white-50 small pe-lg-5">
      Neointeraction is a UX/UI design company that specializes in creating
      user-centered digital experiences. We offer a wide range of services,
      including user research, interface design, usability testing, and
      front-end development.
    </p>

    <!-- Middle Section - Link Columns -->
    <div class="row py-5 border-secondary border-opacity-25">
      <div class="col-6 col-md-3 footer-col">
        <h5 class="footer-heading">Overview</h5>
        <ul class="p-0 footer-link-list">
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="careers.php">Careers</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 footer-col">
        <h5 class="footer-heading">Services</h5>
        <ul class="p-0 footer-link-list">
          <li><a href="#">UX Design</a></li>
          <li><a href="#">UI Development</a></li>
          <li><a href="#">UX Audit</a></li>
          <li><a href="#">Product Design</a></li>
          <li><a href="#">Digital Transformation</a></li>
          <li><a href="#">Micro Frontend Architecture</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 footer-col">
        <h5 class="footer-heading">Industries</h5>
        <ul class="p-0 footer-link-list">
          <li><a href="#">Fintech</a></li>
          <li><a href="#">Edtech</a></li>
          <li><a href="#">Healthcare</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 footer-col">
        <h5 class="footer-heading">Resources</h5>
        <ul class="p-0 footer-link-list">
          <li><a href="events.php">Events</a></li>
          <li><a href="blogs.php">Blogs</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Section - Newsletter & Copyright -->
    <div class="row">
      <div class="col-md-9">
        <div class="footer-form-flex newsletter-form flex-wrap">
          <h5 class="footer-heading mb-3">Subscribe to our Newsletters</h5>
          <form id="newsletterForm" class="d-flex flex-wrap">
            <input
              style="min-width: 300px;"
              type="email"
              id="newsletter-email"
              class="form-control me-md-2 mb-2 mb-md-0"
              placeholder="Enter your work email"
              required />

            <button
              type="submit"
              class="btn btn-custom-secondary white"
              id="newsletter-btn">
              Subscribe
            </button>
          </form>
          <div id="newsletter-status"></div>
        </div>
      </div>
    </div>

    <p class="copyright-text mb-0">
      &copy; Neointeraction Design. All rights reserved
    </p>
  </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("newsletterForm");
  const emailInput = document.getElementById("newsletter-email");
  const btn = document.getElementById("newsletter-btn");
  const status = document.getElementById("newsletter-status");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const email = emailInput.value.trim();

    if (!email) {
      status.innerHTML = '<small class="text-danger">Please enter your email</small>';
      return;
    }

    btn.disabled = true;
    btn.textContent = "Subscribing...";

    // Google Form submission
    const GOOGLE_FORM_URL = "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";
    const GOOGLE_FORM_EMAIL_FIELD = "YOUR_TIMESTAMP_FIELD.1195398138"; // Replace with actual entry ID

    const formData = new FormData();
    formData.append(GOOGLE_FORM_EMAIL_FIELD, email);
    formData.append("entry.873621461", "Newsletter"); // Optional
    formData.append("entry.894386", new Date().toISOString()); // Optional

    fetch(GOOGLE_FORM_URL, {
      method: "POST",
      mode: "no-cors", // Google Forms doesn’t support CORS
      body: formData
    })
      .then(() => {
        status.innerHTML = '<small class="text-success">Thank you for subscribing!</small>';
        emailInput.value = "";
      })
      .catch(() => {
        // Even if error, assume submission worked (Google Forms blocks CORS)
        status.innerHTML = '<small class="text-success">Thank you for subscribing!</small>';
        emailInput.value = "";
      })
      .finally(() => {
        btn.disabled = false;
        btn.textContent = "Subscribe";
        setTimeout(() => (status.innerHTML = ""), 3000);
      });
  });
});
</script>
