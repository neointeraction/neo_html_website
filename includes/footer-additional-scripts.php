<script>
document.addEventListener("DOMContentLoaded", function() {
  var lazyIframes = [].slice.call(document.querySelectorAll("iframe[data-src]"));

  if ("IntersectionObserver" in window) {
    let lazyIframeObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(iframe) {
        if (iframe.isIntersecting) {
          let iframeElement = iframe.target;
          iframeElement.src = iframeElement.dataset.src;
          iframeElement.removeAttribute('data-src');
          lazyIframeObserver.unobserve(iframeElement);
        }
      });
    });

    lazyIframes.forEach(function(iframe) {
      lazyIframeObserver.observe(iframe);
    });
  } else {
    // Fallback for browsers that don't support Intersection Observer
    lazyIframes.forEach(function(iframe) {
      iframe.src = iframe.dataset.src;
      iframe.removeAttribute('data-src');
    });
  }
});
</script>
