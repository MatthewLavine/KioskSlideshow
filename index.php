<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Picture Album</title>
	<script src="./js/jquery-1.12.0.min.js"></script>
	<script src="./js/jquery.bxslider.min.js"></script>
	<script src="./js/init.js"></script>
	<link href="./css/jquery.bxslider.css" rel="stylesheet" />
	<link href="./css/style.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<ul class="bxslider">
			<?php
				$path = "D:/Dropbox/Desktop Wallpapers/Star Wars/";
				$encode = false;
				foreach(glob($path."*") as $file) {
					if (!is_dir($file)) {
						if($encode) {
							$image = base64_encode(file_get_contents(''.$path.basename($file)));
							echo '<li><img class="hidden" src="data:image/jpg;base64,' . $image . '" /></li>';
						} else {
							echo '<li><img src="./library/Star Wars/' . basename($file) . '" /></li>';
						}
					}
				}
			?>
		</ul>
	</div>
</body>
</html>
