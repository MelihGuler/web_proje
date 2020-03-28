<script>

	document.getElementById("show_menu").onclick = function () {
		var elem = document.getElementById("show_menu");
		var nav_menu = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
		var status = elem.classList.contains("open");
		if (status) {
			elem.classList.remove("open");
			elem.classList.add("close");
			elem.getElementsByTagName("i")[0].classList.remove("fa-angle-double-up");
			elem.getElementsByTagName("i")[0].classList.add("fa-angle-double-down");
		}
		else {
			elem.classList.add("open");
			elem.classList.remove("close");
			elem.getElementsByTagName("i")[0].classList.remove("fa-angle-double-down");
			elem.getElementsByTagName("i")[0].classList.add("fa-angle-double-up");
		}

		for (var i = 0; i < nav_menu.length; i++) {
			if (nav_menu[i].getAttribute("id") != "show_menu") {
				if (status) {
					nav_menu[i].style.display = "none";
				}
				else {
					nav_menu[i].style.display = "block";
				}
			}
		}
	};
</script>