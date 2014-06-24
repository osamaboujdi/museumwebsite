<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://osamaboujdi.nl/projecten/meer/museum/new/styles/style.css">
	<meta charset="utf-8">
	<script src="http://osamaboujdi.nl/projecten/meer/museum/new/scripts/mainJavascript.js"></script>
</head>
<body>
<div id="container">
	<div id="latest">
		<ul>
		<?php 
			foreach ($lastScannedData as $key => $value) {
				echo'<div class="latestItem">'.
				$value['title'].
				' <a href="?page=viewArt&data='.$value['id'].'">Bekijk nog een keer</a></div>';
			}
		 ?>
		</ul>
		<span class="smallButton"><a href="?page=scanner">Terug naar de scanner</a></span>
	</div>
</div>
</body>
</html>