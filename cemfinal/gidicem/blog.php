<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Etkinlikler</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="dummy/logo.png" alt="Site Title">
					</a> <!-- #branding -->
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item "><a href="index.php">Anasayfa</a></li>
							<li class="menu-item"><a href="about.php">Hakkımızda</a></li>
							<li class="menu-item"><a href="gallery.php">Fotograflar</a></li>
							<li class="menu-item current-menu-item"><a href="blog.php">Etkinlikler</a></li>
							<li class="menu-item"><a href="contact.php">İletişim</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="content">
									<h2 class="entry-title">Etkinlikler</h2>

									<?php 
									$conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");
									$veri = $conn
									->query("SELECT * FROM etkinlikler")
									->fetchAll();



									foreach($veri as $row){
										echo 
										"
										<div class=\"post\">
										<div class=\"entry-date\">
											<div class=\"date\">".$row[1]."</div>
											<span class=\"month\">".$row[2]."</span>
										</div>
										<div class=\"featured-image\">
											<img src=\"actvty/".$row[3]."\" alt=\"\">
										</div>
										<h2 class=\"entry-title\"><a href=\"#\">".$row[4]."</a></h2>
										<p></p>
										
									</div>";
								
								
								}
								?>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<img src="dummy/logo-footer.png" alt="Site Name">
					
					<address>
						<p>Neşet Ömer Sokak, 34710 KADIKÖY / İstanbul<br><a href="tel:5425439319">+90 542 543 9319</a> <br> <a href="mailto:gıdıcem@gmail.com">gıdıcem@gmail.com</a></p> 
					</address> 
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
					
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>