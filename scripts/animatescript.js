window.addEventListener('load',pageLoaded,false);
function pageLoaded(){
	var container = document.getElementById('container');
	function animate(){
		container.style.left = 0;
	}
	animate();
}