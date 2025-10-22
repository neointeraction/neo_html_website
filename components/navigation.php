    <!-- navbar  -->
    
    <nav class="navbar-container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg custom-navbar">
              <div class="container-fluid p-0">
                <a class="navbar-brand d-flex align-items-center" href="<?php echo $path; ?>index.php">
                  <img
                    src="<?php echo $path; ?>assets/images/header_logo.png"
                    alt="Neointeraction Design Logo" 
                    width="239px"
                    height="52px"/>
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  id="mobileToggle">
                  <span class="hamburger navbar-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </button>
                <div
                  class="collapse navbar-collapse justify-content-end"
                  id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'Home') echo ' active'; ?>" aria-current="page" href="<?php echo $path; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'About Us') echo ' active'; ?>" href="<?php echo $path; ?>about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'Services') echo ' active'; ?>" href="<?php echo $path; ?>ui-ux-design-services.php">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'Projects') echo ' active'; ?>" href="<?php echo $path; ?>projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'Events') echo ' active'; ?>" href="<?php echo $path; ?>events.php">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link<?php if ($page == 'Blogs') echo ' active'; ?>" href="<?php echo $path; ?>blogs.php">Blogs</a>
                    </li>
                  </ul> <a class="btn btn-custom ms-lg-3" href="<?php echo $path; ?>contact-us.php">Submit Enquiry</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </nav>