<?php
	require_once('admin/class_function/error.php');
	require_once('admin/class_function/session.php');
	require_once('admin/class_function/function.php');
	require_once('admin/class_function/dbconfig.php');

	require('pages/meta.php');
	require('pages/title.php');
	require('pages/header.php');
	require('pages/footer.php');
?>

﻿<!DOCTYPE html>
<html lang="en">

<head>
	<?= $meta ?>
	<title><?= $title ?></title>
	<?= $favicon ?>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/theme-turqoise.css" id="template-color" />
	<link rel="stylesheet" href="css/lightslider.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Roboto+Slab:400,700&amp;subset=latin,latin-ext,greek-ext,greek,cyrillic,vietnamese,cyrillic-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="js/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/styler.css" type="text/css" />
</head>
<body>

	<!--header-->
	<?= $header ?>
	<!--header-->

	<!--main-->
  <main class="main">
		<div class="wrap">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<!--crumbs-->
				<ul>
					<li><a href="#" title="Home">Home</a></li>
					<li>Page Name</li>
				</ul>
				<!--//crumbs-->
			</nav>
			<!--//breadcrumbs-->

			<div class="row">
				<div class="three-fourth">
					<h1>Page Title Here</h1>



				</div>
			</div>
		</div>
	</main>
	<!--//main-->

	<!--footer-->
	<?= $footer ?>
	<!---footer-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js"></script>
	<script type="text/javascript" src="js/lightslider.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">
		(function( $ ) {
			$(document).ready(function(){
				$('.form').hide();
				$('#form1').show();
				$('.f-item:nth-child(1)').addClass('active');
				$('.f-item:nth-child(1) span').addClass('checked');

				$('#hero-gallery').lightSlider({
					gallery:true,
					item:1,
					pager:false,
					gallery:false,
					slideMargin: 0,
					speed:2000,
					pause:6000,
					mode: 'fade',
					auto:true,
					loop:true,
					onSliderLoad: function() {
						$('#hero-gallery').removeClass('cS-hidden');
					}
				});
			});
		})(jQuery);
	</script>

	<script src="js/styler.js"></script>
</body>


</html>
