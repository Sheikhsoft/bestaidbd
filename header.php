<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<?php wp_head() ?>

</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->



	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
						<!-- Contact -->
						<ul class="top-link">
							<li><a href="#">About</a></li>
							<li><a href="#">Doctors</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
						<!-- End Contact -->
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><i class="fa fa-phone"></i>+880 1234 56789</li>
							<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">


									<?php
									if (has_nav_menu('primary')) {

										wp_nav_menu(
											array(
												'container'  => '',
												'items_wrap' => '%3$s',
												'theme_location' => 'primary',
												'items_wrap'      => '<ul id="primary-menu-list" class="nav menu">%3$s</ul>',

											)
										);
									}
									?>

									<!-- <ul class="nav menu">
										<li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="index.html">Home Page 1</a></li>
												<li><a href="index2.html">Home Page 2</a></li>
											</ul>
										</li>
										<li><a href="#">Doctos <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="doctors.html">Doctor</a></li>
												<li><a href="doctor-details.html">Doctor Details</a></li>
											</ul>
										</li>
										<li><a href="#">Services <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="service.html">Service</a></li>
												<li><a href="service-details.html">Service Details</a></li>
											</ul>
										</li>
										<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="about.html">About Us</a></li>
												<li><a href="appointment.html">Appointment</a></li>
												<li><a href="time-table.html">Time Table</a></li>
												<li><a href="testimonials.html">Testimonials</a></li>
												<li><a href="pricing.html">Our Pricing</a></li>
												<li><a href="register.html">Sign Up</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="faq.html">Faq</a></li>
												<li><a href="mail-success.html">Mail Success</a></li>
												<li><a href="404.html">404 Error</a></li>
											</ul>
										</li>
										<li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="blog-grid.html">Blog Grid</a></li>
												<li><a href="blog-single.html">Blog Details</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul> -->
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
								<a href="appointment.html" class="btn">Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!-- End Header Area -->