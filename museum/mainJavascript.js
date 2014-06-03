window.addEventListener('load',pageLoaded,false);
function pageLoaded(){
	var container = document.getElementById('container');
	var status = document.getElementById('status');

	function scanning(){
		//Deze functie is er voor het scannen(hij scant nog niet);
		status.innerHTML = "Scannen...";
	}
	window.setTimeout(function(){
		scanning();
	},500)
	function animate(){
		container.style.left = 0;
	}
	animate();
}