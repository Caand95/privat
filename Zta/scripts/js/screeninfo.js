function ScreenInfo() {
	var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	document.getElementById("b0dy").style.width = w + "px";
	document.getElementById("b0dy").style.height = h + "px";
}