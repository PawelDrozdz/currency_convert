<?php
//use the value sent from the script, replace "," with "." for ease of use
$amount_to_convert = str_replace(",",".",$_REQUEST["q"]);
	
//simple validation to only allow usable numeric values
if (!is_numeric($amount_to_convert)){
	$amount_to_convert = 1;
}

/*attempt to pull JSON from fixer.io API, if no server response, die and send a message back to the script, using file_get_contents for simplicity and since it's allowed from the host, a more robust solution would be to use cURL*/
if(FALSE !== ($content = @file_get_contents('http://api.fixer.io/latest?symbols=RUB,PLN'))) {
	//convert JSON
    $conversion_data = json_decode($content, true);

    //calculate the RUB->PLN rate from rates given from API: EUR->RUB and EUR->PLN
    $rub_to_pln_rate = $conversion_data["rates"]["PLN"]/$conversion_data["rates"]["RUB"];

    //calculate the converted amount in PLN
    $converted_amount = $amount_to_convert * $rub_to_pln_rate;
	
	//send formatted converted amount
    echo $amount_to_convert . " RUB = " . round($converted_amount, 4) . " PLN";
}
else {
	//inform the script that connection to the server failed
    die('Failed');
}
?>