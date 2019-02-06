<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>TeleMedicine Meeting System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<!-- <link href="css/app.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="css/login-register.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<section class="contactInfo">
				<div class="container">




					<div class="col-md-12">
						<div class="contact-area">
							<ul>
								<li>
									<i class="fa fa-phone-square"></i>0554542363</li>
								<li>
									<i class="fa fa-envelope-o"></i>amcghanacare@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<img src="img/logo.png" alt="logo" />
						</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="./">Home</a>
							</li>
							<li>
								<a href="?p=about">About Us</a>
							</li>
							<li>
								<a href="?p=services">Services</a>
							</li>
							<li>
								<a href="?p=portfolio">Portfolio</a>
							</li>
							<li>
								<a href="?p=pricing">Pricing</a>
							</li>
							<li>
								<a href="?p=see-a-doctor">See a Doctor</a>
							</li>
							<li>
								<a href="?p=contact">Contact</a>
							</li>
<?php 
if($loggedin == true){
	?>
	<li>
		<a href="service/logout.php" class="btn-info">Logout  </a>
	</li>
<?php } else{ 
	 ?>
							<li>
								<a class="btn-info" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login/Register</a>
							</li>
<?php } ?>


						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->