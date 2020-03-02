<?php
	require_once('admin/class_function/error.php');
	require_once('admin/class_function/session.php');
	require_once('admin/class_function/function.php');
	require_once('admin/class_function/dbconfig.php');

	require('pages/meta.php');
	require('pages/title.php');
	require('pages/header.php');
	require('pages/footer.php');
	require('pages/display_message.php');
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

			<!--//breadcrumbs-->
      <?= $display_message ?>
			<div class="row">
			<div>
			<h1>Zimbabwe Visa Application Form</h1>

					<form id="booking" method="post" action="exe_visa.php" class="static-content booking">
						<fieldset>
							<h2><span>01 </span>Traveller info</h2>
							<div class="row">
								<div class="f-item one-half">
									<label for="Title">Title</label>
									<input type="text" id="title" name="title">
								</div>
								<div class="f-item one-half">
									<label for="Sex">Sex</label>
									<input type="text" id="sex" name="sex">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Surname">Surname</label>
									<input type="text" id="surname" name="surname">
								</div>
								<div class="f-item one-half">
									<label for="middle_Name">Middle Name</label>
									<input type="text" id="middle_name" name="middle_name">
								</div>

							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="last_Name">Last Name</label>
									<input type="text" id="last_name" name="last_name">
								</div>
								<div class="f-item one-half">
									<label for="Date Of Birth">Date Of Birth</label>
									<input type="text" id="date_of_birth" name="date_of_birth">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Place Of Birth">Place Of Birth</label>
									<input type="text" id="place_of_birth" name="place_of_birth">
								</div>
								<div class="f-item one-half">
									<label for="Present Nationality">Present Nationality (As Per Passport)</label>
									<input type="text" id="present_nationality" name="present_nationality">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Previous Nationality (If Any) </label>
										<input type="text" id="previous_nationality" name="previous_nationality">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Passport Number </label>
										<input type="text" id="passport Number" name="passport Number">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Place Of Issue </label>
										<input type="text" id="place_of_issue" name="place_of_issue">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Date Of Issue </label>
										<input type="text" id="date_of_issue" name="date_of_issue">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Date Of Expiry </label>
										<input type="text" id="date_of_expiry" name="date_of_expiry">
								</div>
							</div>



							<div class="row">
								<div class="f-item one-half">
									<label>Applicant's Present Occupation </label>
										<input type="text" id="applicants_present_occupation" name="applicants_present_occupation">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Purpose Of Visit </label>
										<input type="text" id="purpose_of_visit" name="purpose_of_visit">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Residential Address  </label>
										<input type="text" id="residential_address" name="residential_address">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Proposed Address In Zimbabwe (include Name Of Person Or Business To Be Visited) </label>
										<input type="text" id="proposed_address_in_zimbabwe" name="proposed_address_in_zimbabwe">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Period Of Visit Intended  </label>
										<input type="text" id="period_of_visit_intended" name="period_of_visit_intended">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Intended Place Of Entry Into Zimbabwe </label>
										<input type="text" id="intended_place_of_entry_into_zimbabwe" name="intended_place_of_entry_into_zimbabwe">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Dates Of Previous Entries Into Zimbabwe </label>
										<input type="text" id="dates_of_previous_entries_into_zimbabwe" name="dates_of_previous_entries_into_zimbabwe">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Address To Which Visa Should Be Sent </label>
										<input type="text" id="address_to_which_visa_should_be_sent" name="address_to_which_visa_should_be_sent">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label>Any Criminal Convictions Sustained By Applicant Are To Be Detailed </label>
										<input type="text" id="Any_criminal_convictions_sustained_by_applicant_are_to_be_detailed" name="any_criminal_convictions_sustained_by_applicant_are_to_be_detailed">
								</div>
							</div>

							<div class="row">
								<div class="f-item full-width">
									<label>Note: All visitors to Zimbabwe must be in possession of return tickets and sufficient funds to support themselves. The granting of a visa is not guarantee of entry, and holders are also required to comply with the requirements of the immigration Act (Chapter 4:02], 1996. </label>

								</div>
							</div>



							<div class="row">
								<div class="f-item full-width">
									<input type="submit" class="gradient-button" value="Proceed to next step" id="next-step">
								</div>
							</div>
						</fieldset>
					</form>


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
