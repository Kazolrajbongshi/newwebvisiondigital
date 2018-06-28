var loadingElem = document.getElementById("pageLoad");
	loadingElem.classList.add("is-running");
	document.body.classList.add("before-animate");
	addEventListener('load', function() {
		var loadingElem = document.getElementById("pageLoad");
		loadingElem.classList.remove("is-running");
		loadingElem.classList.add("is-done");
		document.body.classList.remove("before-animate");
		document.body.classList.add("after-animate");
		setTimeout(function() {
			loadingElem.remove();
		}, 250);
	});