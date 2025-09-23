<?php
/**
 * Get the current page URL
 * @return string Current page URL
 */
function getCurrentPageUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $requestUri = $_SERVER['REQUEST_URI'];
    
    return $protocol . '://' . $host . $requestUri;
}

/**
 * Get client IP address (handles proxies and load balancers)
 * @return string Client IP address
 */
function getClientIpAddress() {
    // Check for various headers that might contain the real IP
    $ipHeaders = [
        'HTTP_CF_CONNECTING_IP',     // Cloudflare
        'HTTP_CLIENT_IP',            // Proxy
        'HTTP_X_FORWARDED_FOR',      // Load balancer/proxy
        'HTTP_X_FORWARDED',          // Proxy
        'HTTP_X_CLUSTER_CLIENT_IP',  // Cluster
        'HTTP_FORWARDED_FOR',        // Proxy
        'HTTP_FORWARDED',            // Proxy
        'REMOTE_ADDR'                // Standard
    ];
    
    foreach ($ipHeaders as $header) {
        if (!empty($_SERVER[$header])) {
            $ips = explode(',', $_SERVER[$header]);
            $ip = trim($ips[0]);
            
            // Validate IP address
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
        }
    }
    
    // Fallback to REMOTE_ADDR if no valid public IP found
    return $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
}

/**
 * Get tracking data for forms (reusable function)
 * @return array Associative array with URL and IP
 */
function getTrackingData() {
    return [
        'current_url' => getCurrentPageUrl(),
        'ip_address' => getClientIpAddress(),
        'timestamp' => date('Y-m-d H:i:s'),
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
    ];
}

/**
 * Get tracking data as JSON for JavaScript
 * @return string JSON encoded tracking data
 */
function getTrackingDataJson() {
    return json_encode(getTrackingData());
}
?>