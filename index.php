<!DOCTYPE html>
<html>
	<head>
		<?php include 'assets/php/htmlheader.php'; ?>
		<title>Edelweiss</title>
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

			<!--  Main Banner Start Here-->
			<div class="main-banner">
				<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
					<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
						<ul>
							<?php
								$rs = "129";
								$path = "assets/images/originals/photos_resized/1920x1000/1920x1000_5.jpg";
								include 'assets/php/home_slider_format.html.php';

								$rs = "130";
								$path = "assets/images/originals/photos_resized/1920x1000/1920x1000_2.jpg";
								include 'assets/php/home_slider_format.html.php';

								$rs = "131";
								$path = "assets/images/originals/photos_resized/1920x500/1920x500_1.jpg";
								include 'assets/php/home_slider_format.html.php';
							?>
						</ul>
						<div class="tp-bannertimer tp-bottom"></div>
					</div>
				</div>
			</div>
			<!--  Main Banner End Here-->
			<!--About Section-->
			<section class="about-section pt-80 pb-100 ptb-xs-40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="block-title mb-45 text-center">
								<h2>The Bakery</h2>
								<p class="lead">
									Edelweiss German Coffee Shop &amp; Bakery is located in downtown Tuscaloosa's Temerson Square
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="rastaurant-pic">
								<img src="assets/images/originals/photos_resized/630x400/630x400_1.jpg" alt="">
							</div>
						</div>
						<div class="col-sm-5">
							<div class="text-block block-pull-l float-left">
								<br>
								<div class="block-line">
									<p>
										Join us for breakfast, lunch, or just a great cup of coffee. You can choose to relax inside or enjoy some fresh air on our porch.
									</p>
									<a href="about_us.html.php" class="btn-text">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--About Section End-->

			<!--Opening Section-->
			<section class="our-open overlay_bg text-center bg_2 light-color pt-80 pb-100 ptb-xs-40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="block-title mb-45 text-center">
								<h2>Opening Hours</h2>
								<p class="lead">
									Serving Breakfast, Lunch & Delectables
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 mb-xs-30 mb-sm-30">
							<div class="opening-box">
								<strong>Monday - Saturday</strong><span class="opening-time">6:30AM - 5:00PM</span><a href="contact.html.php" class="btn-text">Special Requests</a>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 mb-xs-30 mb-sm-30">
							<div class="opening-box">
								<strong>Sunday</strong><span class="opening-time">8:00AM - 2:00PM</span><a href="contact.html.php" class="btn-text">Special Requests</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Opening Section End-->
			<!--Menu Section-->
			<section class="our-menu pb-80 pb-xs-40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="block-title mb-45 text-center pt-80">
								<h2>Our Menu</h2>
								<p class="lead">
									Our menu features a great variety of breakfast and lunch along with a large selection of coffee drinks and sweets.
								</p>
								<hr>
								<p class="lead"><b><i>Call for our weekly specials.</i></b></p>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pr-0 plr-xs-15">
							<div class="about-block black-bg light-color hover-bg clearfix">
								<div class="fl half-width">
									<img class="img-responsive" src="assets/images/originals/photos_resized/846x634/846x634_6.jpg" alt="Photo">
								</div>
								<div class="text-box padding-20 pt-50 half-width fl">
									<a href="menu.html.php">
									<div class="box-title">
										<h3 class="mt-0">Breakfast</h3>
									</div>
									<div class="text-content">
										<p>
											From egg dishes to breakfast sandwiches and pastries, let us start your day right.
										</p>
									</div> </a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pl-0 plr-xs-15">
							<div class="about-block black-bg light-color hover-bg  mb-40 clearfix">
								<div class="fl float-right-sm half-width">
									<img class="img-responsive" src="assets/images/originals/photos_resized/846x634/846x634_5.jpg" alt="Photo">
								</div>
								<div class="text-box padding-20 pt-50 half-width fl">
									<a href="menu.html.php">
									<div class="box-title">
										<h3 class="mt-0">Lunch</h3>
									</div>
									<div class="text-content">
										<p>
											Enjoy a variety of sandwiches and German treats to power the rest of your day.
										</p>
									</div> </a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pr-0 plr-xs-15">
							<div class="about-block black-bg light-color hover-bg mb-40 clearfix">
								<div class="fr float-left-sm half-width">
									<img class="img-responsive" src="assets/images/originals/photos_resized/846x634/846x634_3.jpg" alt="Photo">
								</div>
								<div class="text-box padding-20 pt-50 text-right text-xs-left half-width fl ">
									<a href="menu.html.php">
									<div class="box-title">
										<h3 class="mt-0">Muffins & Pastries</h3>
									</div>
									<div class="text-content">
										<p>
											Featuring the finest from scones to custom cakes, we offer only the most quality German delectables.
										</p>
									</div> </a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pl-0 plr-xs-15">
							<div class="about-block black-bg light-color hover-bg mb-40 clearfix">
								<div class="fr half-width">
									<img class="img-responsive" src="assets/images/originals/photos_resized/846x634/846x634_4.jpg" alt="Photo">
								</div>
								<div class="text-box padding-20 pt-50 text-right text-xs-left half-width fl">
									<a href="menu.html.php">
									<div class="box-title">
										<h3 class="mt-0">Coffee & Smoothies</h3>
									</div>
									<div class="text-content">
										<p>
											From specialty coffees and teas to sweet smoothies, we have the drink for you
										</p>
									</div> </a>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="text-center">
								<a href="printable_menu.pdf" download><b>Click here for printable menu.</b></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Menu Section End-->

			<!--Testimonial Section-->
			<section class="testimonial-section overlay_bg bg_2 text-center light-color pt-80 pb-100 ptb-xs-40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="block-title mb-80 text-center">
								<h2>Testimonial</h2>
								<p class="lead">
									There is no greater compliment than a review or referral from our clients. We thank you for sharing your experiences.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 mb-sm-80">
							<div class="testimonial-block cyan-background">
								<figure class="testimonial-img">
									<img class="img-circle img-border" src="assets/images/originals/photos_resized/70x70/70x70_1.jpg" alt="">
								</figure>
								<h3 class="testimonial-author">mwinston</h3>
								<hr class="small-divider">
								<p>
									Open for breakfast and lunch. Serves a variety of German meats, breads, sauerkraut, pastries, etc. Excellent food, pleasant servers.
								</p>
								<br>
								<hr>
								<p>TripAdvisor</p>
								<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
							</div>
						</div>
						<div class="col-sm-4 mb-sm-80">
							<div class="testimonial-block cyan-background">
								<figure class="testimonial-img">
									<img class="img-circle img-border" src="assets/images/originals/photos_resized/70x70/70x70_2.jpg" alt="">
								</figure>
								<h3 class="testimonial-author writer">Rachel N.</h3>
								<hr class="small-divider">
								<p>
									How have I lived here so long and just found this place! I loved it! The chai tea latte was great and so were their scones! It's the best place to casually meet up with a friend in the morning and I will be going back soon!
								</p>
								<hr>
								<p>Yelp</p>
								<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
							</div>
						</div>
						<div class="col-sm-4 ">
							<div class="testimonial-block cyan-background">
								<figure class="testimonial-img">
									<img class="img-circle img-border" src="assets/images/originals/photos_resized/70x70/70x70_3.jpg" alt="">
								</figure>
								<h3 class="testimonial-author">JP Gravitt</h3>
								<hr class="small-divider">
								<p>
									This place is absolutely amazing. I love it. The food is fantastic, authentic, and I swear to god I could eat every last pastry they have on display. Plus, the bratwursts are absolutely impeccable.
								</p>
								<hr>
								<p>Zomato</p>
								<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Testimonial Section End-->
			
			<?php include 'assets/php/pagefooter.php'; ?>
		</div>
		<!-- Site Wraper End -->

		<?php include 'assets/php/htmlfooter.php'; ?>
	</body>
</html>
