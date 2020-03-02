<?php
	require_once('admin/class_function/error.php');
	require_once('admin/class_function/session.php');
	require_once('admin/class_function/function.php');
	require_once('admin/class_function/dbconfig.php');

	require_once('pages/meta.php');
	require_once('pages/title.php');
	require_once('pages/header.php');
	require_once('pages/footer.php');
	require_once('pages/display_message.php');


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
	<div class="display">
		<?= $display_message ?>
	</div>

			<!--//breadcrumbs-->

			<div class="row">
				<div>
					<h1>Accommodation Reservation Form</h1>


          <form id="booking" method="post" action="exe_hotel.php" class="static-content booking">
						<fieldset>
							<h2>Guest Details</h2>
							<div class="row">
								<div class="f-item one-half">
									<label for="Title">Title (Mr/Mrs/Ms)</label>
									<input type="text" id="title" name="title">
								</div>
								<div class="f-item one-half">
									<label for="Guest Name">Guest Name</label>
									<input type="text" id="guest_name" name="guest_name">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Accompanying Person">Accompanying Person (If There Is Any)</label>
									<input type="text" id="accompanying_person" name="accompanying_person">
								</div>
								<div class="f-item one-half">
									<label for="Company Name">Company Name</label>
									<input type="text" id="company_name" name="company_name">
								</div>
								</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Address Details">Address Details</label>
									<input type="text" id="address_details" name="address_details">
								</div>
								<div class="f-item one-half">
									<label for="Telephone Number">Telephone Number</label>
									<input type="number" id="telephone_number" name="telephone_number">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Email Address">Email Address</label>
									<input type="email" id="email_address" name="email_address">
								</div>
							</div>

								<h2>Reservation Details</h2>
								<div class="row">

										<label>Room Type:</label><br>
										<label><input type="checkbox"  name="room_type1"> Run Of House Rooms (Single) </label><br>
											<label><input type="checkbox" name="room_type2"> Run Of House Rooms (Double) </label>
									</div>

									<h2>Please Complete Your Arrival Details Below</h2>

									<div class="row">
										<div class="f-item one-half">
											<label for="Check-In Date">Check In Date</label>
											<input type="date" id="check_in_date" name="check_in_date">
										</div>
									</div>

									<h2>Arrival Flights Details</h2>

									<div class="row">
										<div class="f-item one-half">
											<label for="Airline">Airline</label>
											<input type="text" id="airline" name="airline_in">
										</div>

										<div class="f-item one-half">
										<label for="Flight Number">Flight Number</label>
										<input type="text" id="flight_number" name="flight_number_in">
									</div>
								</div>

								<div class="row">
									<div class="f-item one-half">
										<label for="Arrival Time">Arrival Time</label>
										<input type="text" id="arrival_time" name="arrival_time">
									</div>
								</div>

								<h2>Please Complete Your Departure Details Below</h2>


								<div class="row">
									<div class="f-item one-half">
										<label for="Check-Out Date">Check Out Date</label>
										<input type="date" id="check_out_date" name="check_out_date">
									</div>
								</div>

								<h2>Departure Flights Details</h2>

								<div class="row">
									<div class="f-item one-half">
										<label for="Airline">Airline</label>
										<input type="text" id="airline" name="airline_out">
									</div>

									<div class="f-item one-half">
									<label for="Flight Number">Flight Number</label>
									<input type="text" id="flight_number" name="flight_number_out">
								</div>
							</div>

							<div class="row">
								<div class="f-item one-half">
									<label for="Departure Time">Departure Time</label>
									<input type="text" id="departure_time" name="departure_time">
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
	  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
