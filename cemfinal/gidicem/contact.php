<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>İletişim</title>
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
		<?php include("header.php") ?>
		<?php include("db_connection.php") ?>
			 <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">İletişim</h2>
						<div class="row">
							<div class="col-md-6">
								<form action="iletisim_kayit.php" class="contact-form" method="post">
									<input type="text" name="isim" id="isim" placeholder="İsim..."..>
									<input type="text" name="mail" id="mail" placeholder="Mail adresiniz..">
									<input type="text" name="konu" id="konu" placeholder="Konu...">
									<textarea name="mesaj" id="mesaj" placeholder="Mesaj..."></textarea>
									<input type="submit" value="Mesaj Gönder">
								</form>
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
									<div class="map"></div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												Neşet Ömer Sokak, 34710 KADIKÖY / İstanbul
                                                
											</div>
											<div class="col-sm-6">
												<a href="mailto:office@companyname.com">gıdıcem@gmail.com</a> <br>
												<a href="tel:9488487853">+90 542 543 9319</a>
											</div>
										</div>
									</address>
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
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>	
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>