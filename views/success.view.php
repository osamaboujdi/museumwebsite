<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://osamaboujdi.nl/projecten/meer/museum/new/styles/style.css">
	<meta charset="utf-8">
	<script src="http://osamaboujdi.nl/projecten/meer/museum/new/scripts/animatescript.js"></script>
</head>
<body>
<div id="container">
	<div id="dialog">
		<div id="mainBar">
		</div>
		<h3>Gelukt!</h3>
		<p>
			We hebben het door jou gevonden kunstwerk gevonden. Dit kunstwerk is ook meteen toegevoegd aan je "laatstbekeken" lijst.
			voor het geval dat je die later nogeens wilt terug zien zonder dat je QR code opnieuwe hoeft te scannen

			Wilt u dit kuntwerk <span class="smallButton"><a href="?page=viewArt&data=<?php echo $_GET['data']?>">Bekijken</a></span> of verder verder <span class="smallButton"><a href="?page=scanner">scannen</a></span>
		</p>
	</div>
</div>
</body>
</html>