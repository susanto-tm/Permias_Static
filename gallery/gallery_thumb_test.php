<html lang="">

<head>
	<title>Gallery</title>
	
	<link rel="stylesheet" type="text/css" href="../css/lightslider.css">
	<style type="text/css">
		.gallery {
			width: 500px;
		}
		ul {
			list-style: none outside none;
			padding-left: 0;
			margin-bottom: 0;
		}
		li {
			display: block;
			float: left;
			margin-right: 6px;
			cursor: pointer;
		}
		img {
			display: block;
			height: auto;
			max-width: 100%;
		}
	</style>
</head>

	<div class="gallery">
		<?php
			foreach(glob("../img/gallery/events/*") as $event) {
				$dir_name = explode("_", basename($event));
				$count = 1;
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
		
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="../js/lightslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $("#lightSlider").lightSlider({
				gallery: true,
				item: 1,
				loop: true,
				slideMargin: 0,
				thumbItem: 9
			});
		    
		})
		
	</script>
</html>
