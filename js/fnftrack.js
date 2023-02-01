/*var js;function include_js(file){var html_doc=document.getElementsByTagName("body")[0];js=document.createElement('script');js.setAttribute('type','text/javascript');js.setAttribute('src',file);html_doc.appendChild(js);js.onreadystatechange=function(){if(js.readyState=='complete'){console.log("Track onreadystate fired")}}
js.onload=function(){console.log("Track onload fired")}
return!1}
var file="https://www.fillandfind.com/track/track.js?ver=100100";include_js(file)*/
console.log('track.js executed');
var pageTitle = document.title;
var referrer = document.referrer;
 

var currUrlHost = window.location.protocol + "//" + window.location.hostname;
var currUrl = window.location.protocol + "//" + window.location.hostname + window.location.pathname;
var screenWidth = window.screen.width;
var screenHeight = window.screen.height;
var viewportWidth = document.documentElement.clientWidth;
var viewportHeight = document.documentElement.clientHeight;
var xhttp = new XMLHttpRequest();
//alert(xhttp);
xhttp.open("POST",mainUrl+"/track/visitorTrack.php?ver=1001", !0);
xhttp.setRequestHeader("Accept", "application/json; charset=UTF-8");
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//xhttp.setRequestHeader("Access-Control-Allow-Origin", "http://track.fillandfind.com");
//xhttp.setRequestHeader("Vary", "Origin");
//xhttp.setRequestHeader("Access-Control-Allow-Credentials", "true");
xhttp.withCredentials = true;
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	console.log(this.responseText);
        var obj = JSON.parse(this.responseText);
		document.cookie = "fnfTrackId="+ obj.cookie +";domain=.mybizinfo.co;path=/"; 
		//alert(obj.cookie);
        console.log("Cookie "+JSON.stringify(this.responseText));
    }
};
xhttp.send("browser-resolution=" + viewportWidth + "X" + viewportHeight + "&screen-resolution=" + screenWidth + "X" + screenHeight + "&pageTitle=" + pageTitle + "&referrer=" + referrer + "&currUrl=" + currUrl);
//console.log("Response "+xhttp.responseText);