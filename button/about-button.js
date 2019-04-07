var buttonEl = document.getElementById("about");
buttonEl.onclick = function() {
	document.getElementById("content").style.display = "block";
	buttonEl.style.display = "none";
};