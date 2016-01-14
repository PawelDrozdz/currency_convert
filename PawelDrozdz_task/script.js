function convertCurrency(amount) {
	//get the value from the form
	var amountValue = document.getElementById(amount).value;
	//inform the user that something is indeed happening
	document.getElementById("convertedCurrency").innerHTML = "Connecting to the server, please wait...";
	
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        var xhttp = new XMLHttpRequest();
    } 
	else {  
	    // code for IE6, IE5
        var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
			//if the server can't be reached, inform the user
			if (xhttp.responseText == "Failed"){
			document.getElementById("convertedCurrency").innerHTML = "Could not reach the server. Try again.";
			}
			else {
			//show the response from the server to the user
		    document.getElementById("convertedCurrency").innerHTML = xhttp.responseText;
			}
        }
    };
 
    xhttp.open("GET", "convert.php?q=" +amountValue, true);
    xhttp.send();
}
