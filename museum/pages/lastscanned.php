<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8">
	<script src="../mainJavascript.js"></script>
</head>
<body>
<div id="container">
	<div id="latest">
		<div class="latestItem">
<!-- 			<h3>Naam van ding</h3>
			<p>
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n
				no no nno no nno no nno no n

			</p>
			<div class="seeThisStuff"><a href="#">Bekijk dit opnieuw</a></div> -->
			<?php
				include '../config.inc.php';
				include '../connect.inc.php';

				$query = "SELECT kunstitems.id, kunstitems.title, kunstitems.info, laatstgezien.gebruiker_id FROM kunstitems INNER JOIN laatstgezien ON kunstitems.geziendoor = laatstgezien.gebruiker_id WHERE laatstgezien.gebruiker_id =1";
				$resultaat = $db->query($query);
				while($gezien = $resultaat->fetch_assoc()){
					// echo $gezien['id'];
					echo '<h3>'.$gezien['title'].'</h3>';
					echo '<p>'.$gezien['info'].'</p><div class="seeThisStuff"><a href="viewart.php?item='.$gezien['id'].'">Bekijk dit opnieuw</a></div>';
					// echo $gezien['gebruiker_id'];

				}

			?>
		</div>
	</div>
</div>
</body>
</html>