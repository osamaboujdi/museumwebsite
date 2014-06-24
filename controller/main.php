<?php 
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'scanner' ;
	switch ($page) {
		case 'scanner':
			include 'views/home.view.php';
			break;
		case 'lastscanned':
			$lastScannedData = $db->selectWhere('kunstitems','geziendoor',1);
			include 'views/lastscanned.view.php';
			$sql = "SELECT kunstitems.title, kunstitems.info, kunstitems.img, kunstitems.jaar, kunstitems.artist, laatstgezien.gebruiker_id FROM kunstitems INNER JOIN laatstgezien ON laatstgezien.art_id = kunstitems.id WHERE laatstgezien.gebruiker_id = 1 LIMIT 0 , 30";
			break;
		case 'uitleg':
			include 'views/howto.php';
			break;
		case 'success':
			$artId = intval($_GET['data']);
			$db->freeQuery("INSERT INTO laatstgezien VALUES(null,1,$artId)");
			include 'views/success.view.php';
			break;
		case 'viewArt':
			$artId = intval($_GET['data']);
			$artToView = $db->selectWhere('kunstitems','id',$artId);
			include 'views/viewart.php';
			break;
		
		default:
			# code...
			break;
	}
 ?>