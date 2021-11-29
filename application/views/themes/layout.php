<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="">
<meta name="theme-color" content="#ff8a00">
<meta name="description" content="Job Portal HTML Template">
<meta name="keywords" content="Employment, Naukri, Shine, Indeed, Job Posting, Job Provider">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=isset($title)?$title.' -Job Portal': 'Job Portal'; ?></title>
<!--  Favicon -->
<link rel="shortcut icon" href="<?= base_url(); ?>assets/new/images/favicon.png">
<!-- CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/new/css/bootstrap-grid.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/new/css/icons.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/new/css/style.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">   
</head>
<body>

	<!-- Navbar File-->
	<?php include('navbar.php'); ?>

	<!--main content start-->
	
		<?php $this->load->view($layout); ?>
	<!--main content end-->

	<!-- Footer File-->
	<?php include('footer.php'); ?>


<!-- Scripts --> 
<script src="<?= base_url(); ?>assets/new/js/jquery-3.3.1.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/jquery-migrate-3.0.0.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/mmenu.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/tippy.all.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/simplebar.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/bootstrap-slider.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/bootstrap-select.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/snackbar.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/clipboard.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/counterup.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/magnific-popup.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/slick.min.js"></script> 
<script src="<?= base_url(); ?>assets/new/js/typed.js"></script>
<script src="<?= base_url(); ?>assets/new/js/custom_jquery.js"></script> 

<script>
if ($('.utf-intro-banner-search-form-block')[0]) {
	setTimeout(function(){ 
		$(".pac-container").prependTo(".utf-intro-search-field-item.with-autocomplete");
	}, 300);
}
</script> 
<script>
var typed = new Typed('.typed-words', {
	strings: ["Web Designer."," Graphic Designer."," Logo Designer."," Sales Marketing."],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>
</body>
</html>
	