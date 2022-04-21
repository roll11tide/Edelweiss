<!DOCTYPE html>
<html>
	<head>
		<?php include 'assets/php/htmlheader.php'; ?>
		<title>Reservation</title>
	</head>
	<body>
		<!-- Start: Preloader section
		========================== -->
		<div id="loader-wrapper" class="loader-wrapper">
			<div class="loader-inner">
				<div class="ball-scale-multiple">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<!-- End: Preloader section
		========================== -->
		<!-- Site Wraper -->
		<div class="wrapper">
			<?php include 'assets/php/pageheader.php'; ?>
			
			<!-- Banner Start Here-->

			<section class="banner banner-bg-1 light-color text-center">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3>Delicious Cousine</h3>
							<h1>reservation</h1>
						</div>
					</div>
				</div>
			</section>
			<!--Banner End Here-->
			<!-- Contact Section -->
			<section class="ptb-80 ptb-xs-40">
				<div class="container contact-form">
					<div class="row">
						<div class="col-sm-12">
							<div class="block-title mb-45 text-center">
								<h2>Book Your Table</h2>
								<p class="lead">
									Perspiciatis unde omnis iste natus doxes sit voluptatem  Perspiciatis unde omnis iste natus doxes sit voluptatem
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">

							<!-- Contact FORM -->
							<form class="contact-form reservation-form mt-45" id="contact">
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-sm-4">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-name" placeholder="Your Email">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-field">
											<input class="input-sm form-full" id="number" type="text" name="form-name" placeholder="Contact Number">
											<i class="fa fa-phone-square" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-field">
											<input type="text" placeholder="Date of Appointment" id="date" class="input-sm form-full datepicker">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-field">
											<select name="ResTime" class="input-sm form-full">
												<option value="6:00pm">6:00 pm</option>
												<option value="6:30pm">6:30 pm</option>
												<option value="7:00pm">7:00 pm</option>
												<option value="7:30pm">7:30 pm</option>
												<option value="8:00pm">8:00 pm</option>
												<option value="8:30pm">8:30 pm</option>
												<option value="9:00pm">9:00 pm</option>
												<option value="9:30pm">9:30 pm</option>
												<option value="10:00pm">10:00 pm</option>
												<option value="10:30pm" selected="selected">10:30 pm</option>
											</select>
											<i class="fa fa-clock-o" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-field">
											<select name="partySize" class="input-sm form-full">
												<option value="1">1 person</option>
												<option value="2">2 people</option>
												<option value="3">3 people</option>
												<option value="4" selected="selected">4 people</option>
												<option value="5">5 people</option>
												<option value="6">6 people</option>
												<option value="7">7 people</option>
												<option value="8">8 people</option>
												<option value="9">9 people</option>
												<option value="10">10 people</option>
												<option value="11">11 people</option>
												<option value="12">12 people</option>
												<option value="13">13 people</option>
												<option value="14">14 people</option>
												<option value="15">15 people</option>
											</select>
											<i class="fa fa-users" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-12 mt-30">
										<button class="btn-text" type="button" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>
					</div>
					<div class="row pt-80 pt-xs-40">
						<div class="col-sm-7">
							<div class="reservation-block">
								<div class="row text-center row-cell light-color">
									<div class="col-sm-12 col-md-4 pb-xs-30 mb-sm-30">
										<i class="fa fa-phone icon-circle pos-s"></i><a href="#" class="mt-15 i-block">+91 123-1234</a>
									</div>
									<div class="col-sm-12 col-md-4 pb-xs-30 mb-sm-30">
										<i class="fa fa-map-marker icon-circle pos-s"></i>
										<p class="mt-15">
											123 Main Street, St. NW Ste,
											1 Washington, DC,USA.
										</p>
									</div>
									<div class="col-sm-12 col-md-4 pb-xs-30">
										<i class="fa fa-envelope icon-circle pos-s"></i><a href="mailto:Construc@support.com" class="mt-15 i-block">restol@support.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="text-block block-pull-l float-left time-box">
								<div class="block-line">
									<img src="assets/images/logo.png" alt="" class="mb-25"><span class="opening-text">WORKING HOURS:</span><span>MON- FRI: 08:00 AM - 10:00 PM</span><span>SAT - SUN: 10:00 AM - 11:00 PM</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php include 'assets/php/pagefooter.php'; ?>
		</div>
		<!-- Site Wraper End -->
		<script src="assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="assets/js/validation.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>
	</body>
</html>
