<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php $base_url="https://oranjdot.net/neo/" ?>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

  // Function to load Google Analytics script
  function loadGoogleAnalytics() {
    var script = document.createElement('script');
    script.async = true;
    script.src = "https://www.googletagmanager.com/gtag/js?id=G-Y8BTX4LVCQ";
    document.head.appendChild(script);

    script.onload = function() {
      gtag('js', new Date());
      gtag('config', 'G-Y8BTX4LVCQ');
    };
  }

  // Load Google Analytics after a delay (e.g., 3 seconds)
  setTimeout(loadGoogleAnalytics, 10000);
</script>
