
<?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2);?>
<link href="<?php echo $path; ?>assets/css/reset.css" rel="stylesheet">
<link href="<?php echo $path; ?>assets/css/vendor/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $path; ?>assets/css/common.css" rel="stylesheet">
<link href="<?php echo $path; ?>assets/css/main.css" rel="stylesheet">
<link href="<?php echo $path; ?>assets/css/vendor/slick.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="<?php echo $path; ?>assets/css/vendor/slick-theme.css" rel="stylesheet" media="print" onload="this.media='all'">
<link href="<?php echo $path; ?>assets/css/responsive.css" rel="stylesheet" media="print" onload="this.media='all'">
