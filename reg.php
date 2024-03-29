<?php
include 'connect.php';
if (isset ($_POST['login_user'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$guests = $_POST['guests'];
	$arrivals = $_POST['arrivals'];
	$leaving = $_POST['leaving'];
	$bday = $_POST['bday'];
	$gender = $_POST['gender'];
	$rail = $_POST['rail'];
	$trek = $_POST['trek'];

	$sql = "insert into book_form(name,email,phone,address,guests,arrivals,leaving,bday,gender,rail,trek) 
    values('$name','$email','$phone','$address','$guests','$arrivals','$leaving','$bday','$gender','$rail','$trek')";
	$result = mysqli_query($con, $sql);

	if ($result) {
		header('location: confirm.html');
	} else {
		die (mysqli_error($con));
	}

}
?>

<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>reg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<link rel="stylesheet" href="registrastion2.css" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">


	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>


<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div id="fh5co-header">
				<header id="fh5co-header-section">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
							<h1 id="fh5co-logo" class="papa"><a href="index.html"><img src="logo done 3.0.png"
										alt="LOGO" width="120" height="50"></a></h1>
							<!-- START #fh5co-menu-wrap -->
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li class="active">
										<a href="index.html">Home</a>
									</li>

									<li>
									<a href="explore.html" class="fh5co-sub-ddown">Treks</a>
									<ul class="fh5co-sub-menu">
										<li><a href="snow.html" target="">Snow</a></li>
										<li><a href="summer.html" target="">Summer</a></li>
										<li><a href="weekend.html" target="">Weekend</a></li>
										<li><a href="special.html" target="">Special</a></li>
									</ul>
									</li>

									<li><a href="contact.html">Contact us</a></li>
									<li><a href="membership.html">Join us</a></li>

									<li>
										<a href="#" class="fh5co-sub-ddown">Log in</a>

									</li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

			</div>


			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
					style="background-image: url(reg\ bg.jpg);">
					<div class="desc animate-box">
						<h2>Booking Your Trip</h2>
						<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
						<span><a class="btn btn-primary btn-lg" href="membership.html">Join Us</a></span>
					</div>
				</div>

			</div>



			<!-- 							code hear 						-->





			<div class="reeg">
				<section class="container1">
					<h1>Booking</h1>
					<form action="#" class="form" method="post">
						<div class="input-box">
							<label>Full Name</label>
							<input type="text" name="name" placeholder="Enter full name" required />
						</div>
						<div class="input-box">
							<label>Email Address</label>
							<input type="text" name="email" placeholder="Enter email address" required />
						</div>
						<div class="input-box">
							<label>How many</label>
							<input type="number" name="guests" placeholder="number of guests" required />
						</div>

						<div class="input-box">
							<label>Address</label>
							<input type="text" name="address" placeholder="Enter address" required />
						</div>

						<!-- <div class="input-box">
					  <label>Where to</label>
					  <input type="text" placeholder="Place you want to visit" required />
					</div> -->




						<div class="column">
							<div class="input-box">
								<label>Phone Number</label>
								<input type="number" name="phone" placeholder="Enter phone number" required />
							</div>
							<div class="input-box">
								<label>Birth Date</label>
								<input type="date" name="bday" placeholder="Enter birth date" required />
							</div>
						</div>
						<div class="column">
							<div class="input-box" class="col-md-2">
								<label>Arrival</label>
								<input name="arrivals" placeholder="Enter Arrival date" type="text" id="date_picker1"
									size=9 required />
							</div>
							<div class="input-box" class="col-md-2">
								<label>Leaving</label>
								<input name="leaving" placeholder="Enter Leaving date" type="text" id="date_picker2"
									size=9 required />
							</div>
						</div>

						<div class="gender-box">
							<label style="color: white;">Gender</label>
							<div class="gender-option">
								<div class="gender">
									<input type="radio" id="check-male" name="gender" value="Male" checked />
									<label for="check-male">male</label>
								</div>
								<div class="gender">
									<input type="radio" id="check-female" name="gender" value="Female" />
									<label for="check-female">Female</label>
								</div>
								<div class="gender">
									<input type="radio" id="check-other" name="gender" value="prefer not to say" />
									<label for="check-other">prefer not to say</label>
								</div>
							</div>
						</div>
						<div class="input-box address">


							<!-- <input type="text" placeholder="Enter street address" required /> -->
							<div class="input-box">
								<label>select railway station</label>
							</div>
							<div class="column">

								<div class="select-box">

									<select name="rail">

										<option hidden>Select Railway Station</option>
										<option>Ahmedabad</option>
										<option>Vadodara</option>
										<option>Surat</option>
									</select>
								</div>
								<!-- <input type="text" placeholder="Enter your city" required /> -->
							</div>
							<!-- <div class="column">
					  <input type="text" placeholder="Enter your region" required />
					  <input type="number" placeholder="Enter postal code" required />
					</div> -->
						</div>
						<div class="gender-box">
							<label style="color: white;">Payment</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDisabled"
									id="flexRadioCheckedDisabled" checked>
								<label style="color: white;" class="form-check-label" for="flexRadioCheckedDisabled">
									CASH PAYMENT
								</label>
							</div>
						</div>
						<div class="input-box address">


							<!-- <input type="text" placeholder="Enter street address" required /> -->
							<div class="input-box">
								<label>Select The Treks</label>
							</div>
							<div class="column">

								<div class="select-box">

									<select name="trek">

										<option hidden>Select The Treks</option>
										<option>1.Kashmir</option>
										<option>2.Kasol Manali</option>
										<option>3.Kasol Sarpass</option>
										<option>4.Kedarnath</option>
										<option>5.Manali</option>
										<option>6.Leh Ladakh</option>
										<option>7.Bungee Jumping</option>
										<option>8.Moon Ganzing</option>
										<option>9.Varso</option>
										<option>10.Zankar</option>
										<option>11.Dalhousie Dharmashala</option>
										<option>12.Explore Himalayas</option>
										<option>13.Har Ki Dun</option>
										<option>14.Saputara</option>
										<option>15.Bakor</option>
										<option>16.Magical Maharashtra</option>
										<option>17.Beyt Dwarka</option>
										<option>18.Jaisalmer</option>
										<option>19.Kutch</option>
										<option>20.Brahamatal</option>
										<option>21.Dalhousie</option>
										<option>22.Spiti Valley</option>
									</select>
								</div>
								<!-- <input type="text" placeholder="Enter your city" required /> -->
							</div>
							<!-- <div class="column">
					  <input type="text" placeholder="Enter your region" required />
					  <input type="number" placeholder="Enter postal code" required />
					</div> -->
						</div>
						<button type="submit" name="login_user" class="btn btn-primary btn-lg"> Submit</button>
					</form>
				</section>
			</div>
		</div>









		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fh5co-news">
						<h3>News</h3>
						<ul>
							<li>
								<a href="#">
									<span class="fh5co-date">March. 10, 2024</span>
									<h3>Comeing Soon New Tracks</h3>
									<p></p>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fh5co-date">jan. 1, 2024</span>
									<h3>Discount For 10 Member</h3>
									<p>Up To 90% TO 70%</p>
								</a>
							</li>
							<li>
								<a href="membership.html">
									<span class="fh5co-date">Sep. 10, 2016</span>
									<h3>New Membership Are Launch </h3>
									<p></p>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-5 fh5co-testimonial">
						<img src="snow bg.jpg" alt="" class="img-responsive mb20">
						<img src="weekend bg.jpg" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<!-- <p>Copyright 2016 Free Html5 <a href="#">Listing</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




	<script>
		$(document).ready(function () {
			///////
			var startDate;
			var endDate;
			$("#date_picker1").datepicker({
				dateFormat: 'dd-mm-yy'
			})
			///////
			///////
			$("#date_picker2").datepicker({
				dateFormat: 'dd-mm-yy'
			});
			///////
			$('#date_picker1').change(function () {
				startDate = $(this).datepicker('getDate');
				$("#date_picker2").datepicker("option", "minDate", startDate);
			})

			///////
			$('#date_picker2').change(function () {
				endDate = $(this).datepicker('getDate');
				$("#date_picker1").datepicker("option", "maxDate", endDate);
			})
			////////////////
		})
	</script>

</body>

</html>