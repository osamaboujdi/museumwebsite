window.addEventListener('load',pageLoaded,false);
function pageLoaded(){
	var container = document.getElementById('container');
	var status = document.getElementById('status');

	function scanning(){
		//Deze functie is er voor het scannen(hij scant nog niet);
		//status.innerHTML = "Scannen...";
	}
	window.setTimeout(function(){
		scanning();
	},500)
	function animate(){
		container.style.left = 0;
	}
	animate();
}
$(document).ready(function(){
	$('#reader').html5_qrcode(function(data){
			$('#status').html("<strong>Gevonden</strong>" + data);
			$('#container').animate({left:"-100%"},500,function(){
				window.location.href = '?page=success&data=' + data;
			});
		},
	 	function(error){
			$('#errs').html(error);
		}, function(videoError){
			$('#errs').html(videoError);
		}
	);
});