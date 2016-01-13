function convertCurrency(amount) {
	var amountValue = document.getElementById(amount).value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
		document.getElementById("convertedCurrency").innerHTML = xhttp.responseText;
    }
  };
 
xhttp.open("GET", "convert.php?q=" +amountValue, true);
xhttp.send();
} 

function convertCurrency2(amount) {
  if (amount=="") {
    document.getElementById("convertedCurrency").innerHTML="Something went wrong";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  document.getElementById("convertedCurrency").innerHtml = "convert Currency script is running";
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("convertedCurrency").innerHTML = xhttp.responseText;
    }
  }
  xmlhttp.open("GET","convert.php?q="+amountValue,true);
  xmlhttp.send();
}