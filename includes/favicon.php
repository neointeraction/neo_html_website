<?php
$url = $_SERVER['REQUEST_URI'];
$count = substr_count($url, '/');
$rootPage = str_repeat('../', $count - 2);
?>
<link rel="icon" href="<?php echo $rootPage; ?>assets/images/icons/favicon.png" type="image/png">
