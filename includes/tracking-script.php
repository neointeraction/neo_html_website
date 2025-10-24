<?php
    // Get tracking data from PHP and pass to contact-us.js
    $trackingDataString = getTrackingDataJson();
    $decodedData = json_decode($trackingDataString);

    // If decoding failed or result is null, default to an empty object
    if ($decodedData === null) {
        $finalData = new stdClass(); // Empty object
    } else {
        $finalData = $decodedData;
    }
?>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof window.trackingData === 'undefined') {
        window.trackingData = <?php echo json_encode($finalData); ?>;
    }
});
