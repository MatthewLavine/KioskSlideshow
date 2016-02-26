<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Picture Album</title>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="./js/jquery.bxslider.min.js"></script>
	<link href="./css/jquery.bxslider.css" rel="stylesheet" />

	<style>
		body, html {
			background: #FFFFFA;
		}

		.container {
			height: 100%;
			margin: 0 auto;
			width:80%;
		}
		.bxslider {
			margin-top: 0;
			list-style-type: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<ul class="bxslider">
			<?php
				/*

				// This method can base64 encode the images and send them in the page
				// This helps if the image directory can otherwise not be aliased for the webserver
				$path = "D:/Dropbox/Desktop Wallpapers/Star Wars/";

				foreach(glob($path."*") as $file) {
					if (!is_dir($file)) {

						$image = base64_encode(file_get_contents(''.$path.basename($file)));
  						echo '<li><img class="hidden" src="data:image/jpg;base64,' . $image . '" /></li>';
					}
				}
				*/

				// This method only works when the image directory can be aliased for the webserver
				// In this example, /library/ is aliased to "D:/Dropbox/Desktop Wallpapers/Star Wars/" in IIS
				$path = "D:/Dropbox/Desktop Wallpapers/Star Wars/";

				foreach(glob($path."*") as $file) {
					if (!is_dir($file)) {
  						echo '<li><img src="./library/Star Wars/' . basename($file) . '" /></li>';
					}
				}
			?>
		</ul>
	</div>

	<script>
		$(document).ready(function(){
	  		$('.bxslider').bxSlider({
	  			speed: 1000,
	  			auto: true,
	  			adaptiveHeight: true,
	  			randomStart: true
	  		});
		});
	</script>
</body>
</html>