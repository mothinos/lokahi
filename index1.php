<!DOCTYPE html>
<html id="index">
		<head>
			<title>LOKAHI - WATER EXPLORER</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="style2.css">
			<link rel="stylesheet" type="text/css" href="slider.css">

			<link rel="icon" type="image/png" href="icones/ico-range-lokahi-mini.png">
			<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> -->
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		</head>
	<?php include("includes/header.php"); ?>
		
		<body>
			<section id="slideshow">
		
				<div class="container">
					<div class="c_slider"></div>
					<div class="slider">
						<figure>
							<img src="images/slider-home.png" alt="slide_home"/>
						</figure><!-- -->
						<figure>
							<img src="images/slider2.png" alt="slider2"/>
						</figure><!-- -->
						<figure>
							<img src="images/slider3.png" alt="slider3"/>
						</figure>
					</div>
				</div>
					
				<span id="timeline"></span>
			</section>
			

			<div id="middle">
				<div id="img_left"><img src="icones/ico-range-white-race.png" class="ico_middle"><div id="middle_hover_left"><img src="icones/ico-range-race.png" class="ico_hover"><a href="#"><button>DISCOVER</button></a></div></div>
				<div id="img_middle"><img src="icones/ico-range-white-wave.png" class="ico_middle"><div id="middle_hover_middle"><img src="icones/ico-range-wave.png" class="ico_hover"><a href="#"><button>DISCOVER</button></a></div></div>
				<div id="img_right"><img src="icones/ico-range-white-discover.png" class="ico_middle"><div id="middle_hover_right"><img src="icones/ico-range-discover.png" class="ico_hover"><a href="#"><button>DISCOVER</button></a></div></div>
			</div>
			<div class="separation"></div>
		</body>
		
		<?php include("includes/footer.php"); ?>
</html>