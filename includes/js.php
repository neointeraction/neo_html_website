<?php
$url = $_SERVER['REQUEST_URI'];
$count = substr_count($url, '/');
$path = str_repeat('../', $count - 2);
?>

<script src="<?php echo $path; ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo $path; ?>assets/js/vendor/aos.js"></script>
<script src="<?php echo $path; ?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo $path; ?>assets/js/vendor/slick.min.js"></script>
<script src="<?php echo $path; ?>assets/js/main.js"></script>
<script src="<?php echo $path; ?>assets/js/registration-modal.js"></script>
<script src="<?php echo $path; ?>assets/js/download-casestudy-modal.js"></script>
