var button = document.getElementsByClassName('menu');

button[0].onclick = function () {
	var navbar = document.getElementsByClassName('navbar-menu');
	navbar[0].classList.toggle('show');
}

var sousmenu = document.getElementById('button_submenu');

sousmenu.onclick = function () {
	var submenu = document.getElementById('submenu');
	submenu.classList.toggle('show');
}
