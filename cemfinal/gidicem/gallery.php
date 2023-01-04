<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Fotoğraflar</title>
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
							<li class="menu-item current-menu-item"><a href="gallery.php">Fotoğraflar</a></li>
							<li class="menu-item"><a href="blog.php">Etkinlikler</a></li>
							<li class="menu-item"><a href="contact.php">İletişim</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Fotoğraflar</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show All</option>
									<option value=".concert">Concert</option>
									<option value=".band">Band</option>
								</select>
								<a href="#" class="current" data-filter="*">Tümünü Görüntüle</a>
								<a href="#" data-filter=".concert">Konserler</a>
								<a href="#" data-filter=".band">Grup</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href="https://partymag.org/blog/wp-content/uploads/2019/11/vadi-istanbul-jolly-joker_Partmag.png"><figure><img src="https://partymag.org/blog/wp-content/uploads/2019/11/vadi-istanbul-jolly-joker_Partmag.png" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="https://yellowbos.com/wp-content/uploads/2019/02/dorock-xl.jpg"><figure><img src="https://yellowbos.com/wp-content/uploads/2019/02/dorock-xl.jpg" alt="gallery 2"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="https://www.themagger.com/wp-content/uploads/2019/01/Istanbul-Konserleri-633x433.jpeg"><figure><img src="https://www.themagger.com/wp-content/uploads/2019/01/Istanbul-Konserleri-633x433.jpeg" alt="gallery 4"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="https://www.soylentidergi.com/wp-content/uploads/2020/04/Zakkum.jpg"><figure><img src="https://www.soylentidergi.com/wp-content/uploads/2020/04/Zakkum.jpg" alt="gallery 5"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="https://staticb.yolcu360.com/blog/wp-content/uploads/2022/02/23140916/2022-istanbul-konserleri-3-500x334.jpg"><figure><img src="https://staticb.yolcu360.com/blog/wp-content/uploads/2022/02/23140916/2022-istanbul-konserleri-3-500x334.jpg" alt="gallery 7"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="https://img-s2.onedio.com/id-59072c46254fb9557b9eac01/rev-0/w-620/f-jpg/s-59ef81a7a6cfc0e5f8b993123af0e240cda35e17.jpg"><figure><img src="https://img-s2.onedio.com/id-59072c46254fb9557b9eac01/rev-0/w-620/f-jpg/s-59ef81a7a6cfc0e5f8b993123af0e240cda35e17.jpg" alt="gallery 8"></figure></a>
								</div>

								<div class="filterable-item band">
									<a href="https://im.haberturk.com/2021/12/24/3294540_ec981b1c027b6d97d427d7a9e5adbc63_640x640.jpg"><figure><img src="https://im.haberturk.com/2021/12/24/3294540_ec981b1c027b6d97d427d7a9e5adbc63_640x640.jpg" alt="gallery 11"></figure></a>
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