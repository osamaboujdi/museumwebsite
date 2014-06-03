<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href=".css">
	<meta charset="utf-8">
	<script src=".js"></script>
</head>
<body>
	<?php
		$art = ($_GET['item']) ? $_GET['item'] : 'none' ;
		include '../config.inc.php';
		include '../connect.inc.php';
		echo $art;
		$query = "SELECT * FROM kunstitems WHERE id='art'";
		$resultaat = $db->query($query);
		while($gezien = $resultaat->fetch_assoc()){
			// echo $gezien['id'];
			echo '<h3>'.$gezien['title'].'</h3>';
			echo '<p>'.$gezien['info'].'</p><div class="seeThisStuff"><a href="?item='.$gezien['id'].'">Bekijk dit opnieuw</a></div>';
			// echo $gezien['gebruiker_id'];

		}
	?>

</body>
</html>