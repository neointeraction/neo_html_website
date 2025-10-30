document.addEventListener("DOMContentLoaded", function() {
    var lazyVideos = [].slice.call(document.querySelectorAll(".youtube-lazy-load"));

    lazyVideos.forEach(function(video) {
        // Set the thumbnail image from YouTube
        var videoId = video.getAttribute("data-id");
        video.style.backgroundImage = 'url(https://i.ytimg.com/vi/' + videoId + '/hqdefault.jpg)';

        // Add a click event listener
        video.addEventListener("click", function() {
        var iframe = document.createElement("iframe");
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
        iframe.setAttribute("allowfullscreen", "");
        iframe.setAttribute("height", "650");
        // Add autoplay=1 to start playing immediately on click
        iframe.setAttribute("src", "https://www.youtube.com/embed/" + videoId + "?rel=0&showinfo=0&autoplay=1&rel=0");

        // Replace the div with the iframe
        this.parentNode.replaceChild(iframe, this);
        });
    });
});