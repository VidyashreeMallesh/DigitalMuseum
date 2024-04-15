<?php
// Start session
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Display welcome message
echo "Welcome, " . $_SESSION['username'] . "! You are now logged in.";
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="codepixer">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>Digital Museum</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

		  <header id="header" id="home">
			  <div class="container header-top">
				  <div class="row">
					  
					  
				  </div>
			  </div>
			  <hr>
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
				  <div id="logo">
					<a href="index.html"><img src="" alt="" title="Digital Museum" /></a>
				  </div>
				  <nav id="nav-menu-container">
					<ul class="nav-menu">
					  <li class="menu-active"><a href="index.html">Home</a></li>

					  <li class="menu-has-children"><a href="">Museums</a>
						<ul>
						  <li><a href="m1bronze.html">National Museum, New Delhi</a></li>
						  <li><a href="m2marble.html">Salar Jung Museum, Hyderabad</a></li>
						  <li><a href="m3sculptures.html">Indian Museum, Kolkata</a></li>
						  <li><a href="m4.html">Sand Museum, Mysuru</a></li>
						</ul>
					  </li>		
					  <li><a href="about.html">About</a></li>
					  <li><a href="contactus.html">Contact</a></li>  
					  <li><a href="logout.php">Logout</a></li>        
					</ul>
				  </nav>		    		
				</div>
			</div>
		  </header>


	


		
		<section class="gallery-area section-gap" id="gallery">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10 text-white">Our Museum Gallery</h1>
							<p>Embark on a journey through time and space as you explore our curated collections. From ancient artifacts to modern masterpieces, each exhibit is a carefully crafted narrative waiting to be discovered. Our digital platform allows you to connect with history in ways that transcend physical boundaries, providing a dynamic and engaging learning experience.</p>
						</div>
					</div>
				</div>						
				<div id="grid-container" class="row">
					<a class="single-gallery" href="img\IM img\Casket_depicting_Krishna_lila.png"><img class="grid-item" src="img\IM img\Casket_depicting_Krishna_lila.png"></a>
					<a class="single-gallery" href="img\NM img\Ragini_Todi_-_Google_Art_Project.jpg"><img class="grid-item" src="img\NM img\Ragini_Todi_-_Google_Art_Project.jpg"></a>
					<a class="single-gallery" href="img\IM img\indian_museum10.jpg"><img class="grid-item" src="img\IM img\indian_museum10.jpg"></a>
					<a class="single-gallery" href="img\NM img\ksp_0385.jpg"><img class="grid-item" src="img\NM img\ksp_0385.jpg"></a>
					<a class="single-gallery" href="img\NM img\IMG_20240312_190016.jpg"><img class="grid-item" src="img\NM img\IMG_20240312_190016.jpg"></a>
					<a class="single-gallery" href="img\SJM img\5.jpg"><img class="grid-item" src="img\SJM img\5.jpg"></a>
					<a class="single-gallery" href="img\SJM img\a2.jpg"><img class="grid-item" src="img\SJM img\a2.jpg"></a>
					<a class="single-gallery" href="img\SJM img\p2.jpg"><img class="grid-item" src="img\SJM img\p2.jpg"></a>
					<a class="single-gallery" href="img\SM img\Mysuru Sand Sculpture Museum (17).jpg"><img class="grid-item" src="img\SM img\Mysuru Sand Sculpture Museum (17).jpg"></a>
					<a class="single-gallery" href="img\NM img\ksp_0383.jpg"><img class="grid-item" src="img\NM img\ksp_0383.jpg"></a>
					<a class="single-gallery" href="img\SJM img\1.jpg"><img class="grid-item" src="img\SJM img\1.jpg"></a>
					<a class="single-gallery" href="img\IM img\z4-tokyo-indian-a-20150313.jpg"><img class="grid-item" src="img\IM img\z4-tokyo-indian-a-20150313.jpg"></a>
					<a class="single-gallery" href="img\NM img\krishna.jpg"><img class="grid-item" src="img\NM img\krishna.jpg"></a>
					<a class="single-gallery" href="img\SJM img\a7.jpg"><img class="grid-item" src="img\SJM img\a7.jpg"></a>
					<a class="single-gallery" href="img\SM img\deb09f20d37323552ce41d6a93b3582b.jpg"><img class="grid-item" src="img\SM img\deb09f20d37323552ce41d6a93b3582b.jpg"></a>
					<a class="single-gallery" href="img\NM img\ksp_0367.jpg"><img class="grid-item" src="img\NM img\ksp_0367.jpg"></a>
					<a class="single-gallery" href="img\SJM img\a8.jpg"><img class="grid-item" src="img\SJM img\a8.jpg"></a>
					<a class="single-gallery" href="img\NM img\IMG_20240312_190016.jpg"><img class="grid-item" src="img\NM img\IMG_20240312_190016.jpg"></a>
					<a class="single-gallery" href="img\SJM img\p6.jpg"><img class="grid-item" src="img\SJM img\p6.jpg"></a>
					<a class="single-gallery" href="img\SM img\211116122sand-museum.jpg"><img class="grid-item" src="img\SM img\211116122sand-museum.jpg"></a>	
					<a class="single-gallery" href="img\SJM img\a4.jpg"><img class="grid-item" src="img\SJM img\a4.jpg"></a>					
				</div>	
			</div>	
		</section>
			
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								At Digital Museum, we embrace innovation in curation. Our team of experts leverages state-of-the-art technology to curate exhibits that not only showcase the beauty of the artifacts but also tell compelling stories. We believe that every artifact has a narrative, and our commitment to storytelling brings history to life in a way that captivates and educates.
							</p>
							<p class="footer-text">
								
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							</p>
						</div>
					</div>
																
				</div>
			</div>
		</footer>	
				

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>	
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/justified.min.js"></script>					
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>			
		<script src="js/parallax.min.js"></script>		
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
</html>



