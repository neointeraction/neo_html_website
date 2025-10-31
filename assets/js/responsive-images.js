document.addEventListener('DOMContentLoaded', () => {
    const mobileBreakpoint = 768; // Define your mobile breakpoint here

    function updateImageSources() {
        const isMobile = window.innerWidth < mobileBreakpoint;
        // Only select images with the 'responsive-image' class
        const images = document.querySelectorAll('img.responsive-image');

        images.forEach(img => {
            if (!img.dataset.desktopSrc) {
                img.dataset.desktopSrc = img.src;
            }

            const desktopSrc = img.dataset.desktopSrc;
            if (!desktopSrc || !desktopSrc.includes('assets/images/')) {
                return; // Skip if no original source or not a target image
            }

            const mobileSrc = desktopSrc.replace('assets/images/', 'assets/images-mobile/');

            if (isMobile) {
                // Check if mobile image exists before setting it
                const mobileImage = new Image();
                mobileImage.src = mobileSrc;
                mobileImage.onload = () => {
                    if (img.src !== mobileSrc) {
                        img.src = mobileSrc;
                    }
                };
                mobileImage.onerror = () => {
                    // If mobile image fails, ensure it's set to desktop
                    if (img.src !== desktopSrc) {
                        img.src = desktopSrc;
                    }
                };
            } else {
                // Revert to desktop image on larger screens
                if (img.src !== desktopSrc) {
                    img.src = desktopSrc;
                }
            }
        });
    }

    // Initial update on page load
    updateImageSources();

    // Update on window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateImageSources, 250); // Debounce resize event
    });
});
