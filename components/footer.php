  <!-- footer  -->
  <?php
  $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);
  ?>
  <footer class="footer">
      <div class="container">
          <!-- Top Section -->
          <div class="row align-items-start pb-4 footer-logo-social">
              <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <div class="d-flex align-items-center mb-3 footer-logo-container">
                      <a href="<?php echo $path; ?>" target="_blank"
                          rel="noopener noreferrer">
                          <img src="<?php echo $path; ?>assets/images/footer-logo.svg" alt="footer"
                              class="footer-neo-logo" width="238px" height="52px" />
                      </a>
                  </div>
              </div>
              <div class="col-12 col-md-6 text-md-end footer-social-icons">
                  <a href="https://www.linkedin.com/company/neointeraction-designs/" target="_blank"
                      rel="noopener noreferrer"><img src="<?php echo $path; ?>assets/images/social/linkedin.svg"
                          alt="linkedin" /></a>
                  <a href="https://www.instagram.com/neointeraction/" target="_blank" rel="noopener noreferrer"><img
                          src="<?php echo $path; ?>assets/images/social/ig.svg" alt="ig"></a>
                  <a href="https://www.facebook.com/Neointeraction/" target="_blank" rel="noopener noreferrer"><img
                          src="<?php echo $path; ?>assets/images/social/fb.svg" alt="fb"></a>
                  <a href="https://dribbble.com/neointeraction" target="_blank" rel="noopener noreferrer"><img
                          src="<?php echo $path; ?>assets/images/social/db.svg" alt="db"></a>
                  <a href="https://neointeraction-design.medium.com/" target="_blank" rel="noopener noreferrer"><img
                          src="<?php echo $path; ?>assets/images/social/med.svg" alt="medium"></a>
              </div>
          </div>

          <p class="footer-text text-white-50 small pe-lg-5">
              Neointeraction is a UX/UI design company that specializes in creating
              user-centered digital experiences. We offer a wide range of services,
              including user research, interface design, usability testing, and
              front-end development.
          </p>

          <!-- Middle Section - Link Columns -->
          <div class="row footer-link-block border-secondary border-opacity-25">
              <div class="col-6 col-md-3 footer-col">
                  <ul class="p-0 footer-link-list">
                      <li><a href="<?php echo $path; ?>index.php">Home</a></li>
                      <li><a href="<?php echo $path; ?>about-us.php">About Us</a></li>
                      <li><a href="<?php echo $path; ?>ui-ux-design-services.php">Services</a></li>
                      <li><a href="<?php echo $path; ?>projects.php">Projects</a></li>
                      <li><a href="<?php echo $path; ?>careers.php">Careers</a></li>
                      <li><a href="<?php echo $path; ?>contact-us.php">Contact Us</a></li>
                  </ul>
              </div>
              <div class="col-6 col-md-3 footer-col">
                  <ul class="p-0 footer-link-list">
                      <li><a href="<?php echo $path; ?>ux-design-services.php">UX Design</a></li>
                      <li><a href="<?php echo $path; ?>front-end-development-services.php">UI Development</a></li>
                      <li><a href="<?php echo $path; ?>ux-design-audit.php">UX Audit</a></li>
                      <li><a href="<?php echo $path; ?>product-design-services.php">Product Design</a></li>
                      <li><a href="<?php echo $path; ?>ui-ux-design-usa.php">USA</a></li>
                      <li><a href="<?php echo $path; ?>ui-ux-design-uae.php">UAE</a></li>
                  </ul>
              </div>
              <div class="col-6 col-md-3 footer-col">
                  <ul class="p-0 footer-link-list">
                      <li><a href="<?php echo $path; ?>banking-and-fintech-solutions.php">Fintech UX Design</a></li>
                      <li><a href="<?php echo $path; ?>edtech-design-services.php">Edtech UX Design</a></li>
                      <li><a href="<?php echo $path; ?>health-care-design-services.php">Healthcare UX Design</a></li>
                  </ul>
              </div>
              <div class="col-6 col-md-3 footer-col">
                  <ul class="p-0 footer-link-list">
                      <li><a href="<?php echo $path; ?>events.php">Events</a></li>
                      <li><a href="<?php echo $path; ?>blogs.php">Blogs</a></li>
                      <li><a href="<?php echo $path; ?>privacy.php">Privacy Policy</a></li>
                  </ul>
              </div>
          </div>

          <!-- Bottom Section - Newsletter & Copyright -->
          <div class="row">
              <div class="col-md-9 col-12">
                  <div class="footer-form-flex newsletter-form flex-wrap">
                      <h5 class="footer-heading mb-0">Subscribe to our Newsletters</h5>
                      <form id="newsletterForm" class="d-flex flex-wrap">
                          <input type="email" id="newsletter-email"
                              class="newsletter-email form-control me-md-4 mb-2 mb-md-0"
                              placeholder="Enter your work email" required />

                          <button type="submit" class="btn btn-custom-secondary white ml-2" id="newsletter-btn">
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
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("newsletterForm");
    const emailInput = document.getElementById("newsletter-email");
    const btn = document.getElementById("newsletter-btn");
    const status = document.getElementById("newsletter-status");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = emailInput.value.trim();

        console.log(email)

        if (!email) {
            status.innerHTML = '<small class="text-danger">Please enter your email</small>';
            return;
        }

        btn.disabled = true;
        btn.textContent = "Subscribing...";

        // Google Form submission
        const GOOGLE_FORM_URL =
            "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";

        const formData = new FormData();
        formData.append("entry.1195398138", email);
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