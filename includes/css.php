
<?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);?>
<link href="<?php echo $path; ?>assets/css/vendor/aos.css" rel="stylesheet" />
<link href="<?php echo $path; ?>assets/css/common.css" rel="stylesheet" />
<link href="<?php echo $path; ?>assets/css/main.css" rel="stylesheet" />
<link href="<?php echo $path; ?>assets/css/responsive.css" rel="stylesheet" />