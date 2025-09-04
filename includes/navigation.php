<?php
// In each page, set: $page = 'Home' | 'About Us' | 'Services' | 'Projects' | 'Events' | 'Blogs';
if (!isset($page)) { $page = ''; }
?>
<header>
  <nav class="custom-navbar">
    <div class="container">
      <a class="custom-logo" href="index.php">
        <img src="img/Logo-Header.avif" alt="Logo">
      </a>

      <!-- IMPORTANT: type="button" to avoid form submission -->
      <button
        type="button"
        class="custom-mobile-toggle"
        id="mobileToggle"
        aria-label="Toggle navigation"
        aria-controls="navMenu"
        aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <ul class="custom-nav-menu" id="navMenu">
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='Home') echo 'active'; ?>" href="index.php">Home</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='About Us') echo 'active'; ?>" href="about-us.php">About Us</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='Services') echo 'active'; ?>" href="services.php">Services</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='Projects') echo 'active'; ?>" href="projects.php">Projects</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='Events') echo 'active'; ?>" href="events.php">Events</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-nav-link <?php if ($page==='Blogs') echo 'active'; ?>" href="blogs.php">Blogs</a>
        </li>
        <li class="custom-nav-item">
          <a class="custom-submit-btn" href="contact-us.php">Submit Enquiry</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Backdrop overlay for outside-click close -->
  <div class="custom-nav-overlay" id="navOverlay" hidden></div>

  <!-- WhatsApp Floating Button (unchanged) -->
  <div class="whatsapp-float">
    <a href="https://wa.me/919449565744?text=Hi%2C%20I%20visited%20www.neointeraction.com%20and%20would%20like%20to%20know%20more%20about%20UI%2FUX%20design%C2%A0services"
       target="_blank"
       class="whatsapp-button"
       title="Chat with us on WhatsApp">
      <img src="img/icons/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
    </a>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  const overlay = document.getElementById('navOverlay');
  const MOBILE_BP = 991; // keep in sync with CSS

  function openMenu() {
    navMenu.classList.add('active');
    mobileToggle.setAttribute('aria-expanded', 'true');
    overlay.hidden = false;
    document.body.classList.add('no-scroll');
  }

  function closeMenu() {
    navMenu.classList.remove('active');
    mobileToggle.setAttribute('aria-expanded', 'false');
    overlay.hidden = true;
    document.body.classList.remove('no-scroll');
  }

  function toggleMenu(e) {
    e.stopPropagation(); // prevent bubbling to document/overlay handlers
    if (navMenu.classList.contains('active')) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  if (mobileToggle && navMenu && overlay) {
    mobileToggle.addEventListener('click', toggleMenu);

    // Close on overlay click
    overlay.addEventListener('click', closeMenu);

    // Close on link click
    navMenu.querySelectorAll('.custom-nav-link, .custom-submit-btn').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeMenu();
    });

    // Reset state on resize to desktop
    window.addEventListener('resize', () => {
      if (window.innerWidth > MOBILE_BP) {
        closeMenu();
      }
    });
  }
});
</script>