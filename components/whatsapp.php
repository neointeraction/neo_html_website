  <!-- WhatsApp Floating Button (unchanged) -->
  <div class="whatsapp-float">
    <a href="https://wa.me/919449565744?text=Hi%2C%20I%20visited%20www.neointeraction.com%20and%20would%20like%20to%20know%20more%20about%20UI%2FUX%20design%C2%A0services"
       target="_blank"
       class="whatsapp-button"
       title="Chat with us on WhatsApp">
      <img src="<?php echo $path; ?>assets/images/social/wa.svg" alt="WhatsApp" class="whatsapp-icon">
    </a>
  </div>

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