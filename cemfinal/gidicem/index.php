<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>GidiCem</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
	</head>

	<?php 

	$json_string = 'https://api.genelpara.com/embed/doviz.json'; 
	$jsondata = file_get_contents($json_string);
	$obj = json_decode($jsondata, true); 
	print_r($obj["USD"]);

	?>

	<body class="header-collapse">
		<div id="site-content">

			<?php include("header.php") ?>
			<!-- .site-header -->
			
			<div class="hero">
				<div class="slider">
					<ul class="slides">
					<?php 
                            $conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");
                              $veri = $conn
                              ->query("SELECT * FROM anasayfa_hero")
                              ->fetchAll();



							  foreach($veri as $row){
								echo "<li class=\"lazy-bg\" data-background=\"dummy/slide-1.jpg\">
								<div class=\"container\">
								<h2 class=\"slide-title\">".$row[1]."</h2>
								<h3 class=\"slide-subtitle\">".$row[2]."</h3>
								<p class=\"slide-desc\">".$row[3]."</p>
								</div>
								</li>";
							}
						?>
					</ul>
				</div>
			</div>
			
			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">
							<ul class="slides">

									<?php 
									$conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");
									$veri = $conn
									->query("SELECT * FROM ozlu")
									->fetchAll();



									foreach($veri as $row){
										echo "<li>
										<blockquote>
										<p>".$row[2]."</p>
										<cite>".$row[1]."</cite>
									</blockquote>
									</li>";
									}
								?>
								
							</ul>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Yaklaşan Etkinlikler</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						<div class="event-carousel">
							
						<?php 
									$conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");
									$veri = $conn
									->query("SELECT * FROM yaklasan_etkinlikler")
									->fetchAll();



									foreach($veri as $row){
										echo "
										<div class=\"event\">
								<div class=\"entry-date\">
									<div class=\"date\">".$row[1]."</div>
									<span class=\"month\">".$row[2]."</span>
								</div>
								<h2 class=\"entry-title\"><a href=\"blog.php\">".$row[3]."</a></h2>
								<p>".$row[4]."</p>
							</div>";
									}
								?>

							
							
							
							<!-- .event -->							
						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

				
			</main> <!-- .main-content -->

			<?php include("foother.php") ?> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>