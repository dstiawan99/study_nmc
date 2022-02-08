var path = location.pathname.split("/");
var url = location.origin + "/" + path[1];

$("ul.nav li a").each(function () {
	if ($(this).attr("href").indexOf(url) !== -1) {
		$(this)
			.parent()
			.addClass("")
			.parent()
			.parent("li")
			.addClass("")
			.parent("a")
			.addClass("active");
	}
});

// console.log(location.path[2]);
