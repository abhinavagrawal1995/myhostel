<!DOCTYPE HTML>
<!--
	MyHostel Web App
	By Abhinav Agrawal
	abhinavagrawal.in
-->
<html>
	<head>
		<title>MIT Hostels</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<?php include 'header.php'; ?>

			<!-- Banner -->
				<section id="banner">
					<h2>MIT Hostels</h2>
					<p>A web app to help you after being allotted rooms according to your 'preference'</p>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Here's how it works</h2>
							<p>Login via FB, and enter your registration number, and allotted room.<br>You may then see who's your roomie, or find someone to exchange rooms with after entering your preference.</p>
						</header>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-group accent2"></span>
								<h3><a href="roomie.php">Find Roommate(s)</a></h3>
								<p>Find out who you're stuck with for the next year.</p>
							</section>
							<section>
								<span class="icon major fa-exchange accent3"></span>
								<h3><a href="exchange.php">Mutual Exchange</a></h3>
								<p>Find someone crazy enough to exchange rooms with you.</p>
							</section>
						</div>
					</section>
				</section>


			<!-- Footer -->
				<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>