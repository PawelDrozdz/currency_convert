function convertCurrency(amount) {
	var amountValue = document.getElementById(amount).value;
	
	if (amount=="") {
        document.getElementById("convertedCurrency").innerHTML="Something went wrong";
    return;
	}
  
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
		    document.getElementById("convertedCurrency").innerHTML = amountValue + " RUB = " + xhttp.responseText + " PLN";
        }
    };
 
    xhttp.open("GET", "convert.php?q=" +amountValue, true);
    xhttp.send();
} 