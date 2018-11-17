var xmlHttp;

function GetXmlHttpObject() {
	"use strict";
	var xmlHttp = null;
	try {
		// Firefox, Opera 8.0+, Safari
		xmlHttp = new XMLHttpRequest();
	} catch (e) {
		// Internet Explorer
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

function show(nam) {
	"use strict";
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp === null) {
		alert("Brower does not support HTTP Request");
		return;
	}
	xmlHttp.onreadystatechange = stateChanged;
	xmlHttp.open("GET", "load.php?name="+nam, true);
	xmlHttp.send(null);
	return;
}


function stateChanged() {
	"use strict";
	if (xmlHttp.readyState === 4 || xmlHttp.readyState === "complete") {
		document.getElementById("words").innerHTML = xmlHttp.responseText;
	}
}