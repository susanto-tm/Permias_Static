<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title>Permias Penn State</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="manifest" href="../site.webmanifest">
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/gallery.css">
	<link rel="stylesheet" href="../css/lightslider.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700&display=swap" rel="stylesheet">

</head>

<body>
<!-- Add your site or application content here -->
<header id="nav" class="navbar">
	<nav class="primary clearfix">
		<h1><a href="../index.html" id="permias-logo" class="logo hide-text">Logo</a></h1>
		<div class="menu">
			<a href="../officers/officers.html">Officers</a>
			<a href="gallery.php">Gallery</a>
			<a href="#">Events</a>
			<a href="#">ICN</a>
			<a href="#">Fun Facts</a>
			<a href="#">Members</a>
			<a href="../guide/freshmans-guide.html">Freshman's Guide</a>
			<a href="#">Contact Us</a>
		</div>
	</nav>
</header>

<article>
	<section id="hero-banner" class="clearfix">
		<div class="banner-container">
			<div class="large-header">
				<h1 class="main-header">PERMIAS Gallery</h1>
			</div>
			<div class="banner-image entry-banner"></div>
		</div>
	
	</section>
	<section class="gallery">
		<!-- For every events directory, there is a corresponding directory with the same name in the thumb directory.
			 Get the images in the thumb directory first then search the image with the same name in events. Then format
			 them in the way the lightSlider would process -->
		<?php
			foreach(glob("../img/gallery/events/*") as $event) {
				$dir_name = explode("_", basename($event));
				$count = 1;
				$title = implode(" ", $dir_name);
				echo "<h1 class='$dir_name[0]'>".$title."</h1>\n";
				echo "<ul id='lightSlider' class='$dir_name[0]'>";
					foreach(glob("../img/gallery/thumb/".basename($event)."/*.{jpg,png,jpeg}", GLOB_BRACE) as $thumb) {
						$img = $event."/".basename($thumb);
						$alt = $dir_name[0]."_".$count;
						echo "<li data-thumb='$thumb'>";
						echo "<img src='$img' alt='$alt' style='width: 100%;'/>";
						echo "</li>\n";
						$count++;
					}
					echo "</ul>\n";
				}
			?>
	</section>
</article>

<!-- Scripts and Javascript -->
<script src="../js/vendor/modernizr-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>-->
<script src="../js/plugins.js"></script>
<script src="../js/lightslider.js"></script>
<script src="../js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#lightSlider").lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 9
        });
    })
</script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site' s ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
