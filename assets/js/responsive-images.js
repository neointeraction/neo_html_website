document.addEventListener('DOMContentLoaded', () => {
    const mobileBreakpoint = 768; // Define your mobile breakpoint here

    function updateImageSources() {
        const isMobile = window.innerWidth < mobileBreakpoint;
        const images = document.querySelectorAll('img');

        images.forEach(img => {
            // Use a data attribute to store the original desktop source
            if (!img.dataset.desktopSrc) {
                img.dataset.desktopSrc = img.src;
            }

            const desktopSrc = img.dataset.desktopSrc;
            if (!desktopSrc) return; // Skip if no original source is set

            const isDesktopPath = desktopSrc.includes('assets/images/');
            
            if (isMobile && isDesktopPath) {
                // Switch to mobile image
                const mobileSrc = desktopSrc.replace('assets/images/', 'assets/images-mobile/');
                if (img.src !== mobileSrc) {
                    img.src = mobileSrc;
                }
            } else if (!isMobile) {
                // Switch back to desktop image
                if (img.src !== desktopSrc) {
                    img.src = desktopSrc;
                }
            }

            // Add error handling to revert to desktop image if mobile image fails to load
            img.onerror = () => {
                if (img.src !== desktopSrc) {
                    img.src = desktopSrc;
                }
                img.onerror = null; // Prevent infinite loop if desktop image also fails
            };
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
