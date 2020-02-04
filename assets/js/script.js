var userLoggedIn;

function openPage(url) {

	if (url.indexOf("?") == -1) {
		url = url + "?";
	}

	var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
	$("#mainContent").load(encodedUrl);
	$("body").scrollTop(0); //fixes scroll issues from ajax page change
	history.pushState(null, null, url); //updates url for ajax page change

}