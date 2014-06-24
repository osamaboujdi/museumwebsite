<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta charset="utf-8">
	<script src="../mainjavascript.js"></script>
</head>
<body>
	<div id="container">

	<?php 
	var_dump($artToView);echo('<hr />');
			foreach ($artToView as $key => $value) {//clean this up, fag
				echo'<div class="artshit">'.
				'<div class="artTitle"><h2>'.$value['title'].'</h2></div>'.
				'<div class="artArtist">'.$value['artist'].'</div>'.
				'<div class="artInfo">'.$value['info'].'</div>'.
				'<div class="artYear"><img src="'.$value['img'].'" /></div>'.
				'<div class="artImg">'.$value['jaar'].'</div></div>';
			}

	?>	
	<span class="smallButton"><a href="?page=scanner">Terug naar de scanner</a></span>
	</div>
<style type="text/css">
.artshit{
	width: 75%;
	margin: 0 auto;
	padding: 10px;
}
.artshit .artTitle{
	padding: 3px;
}
.artshit .artInfo{

}
.artshit .artYear{

}
.artshit .artArtist{
font-weight: bold;
}
.artshit .artImg{

}

</style>
</body>
</html>