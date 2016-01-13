<?php
//use the value sent from the script, replace "," with "." for ease of use
$amount_to_convert = str_replace(",",".",$_REQUEST["q"]);
	
//simple validation to only allow valid numeric values
if (!is_numeric($amount_to_convert)){
	$amount_to_convert = 1;
}

//pull the conversion data from fixer.io API and convert it from JSON to associative array
$conversion_data = json_decode(file_get_contents('http://api.fixer.io/latest?symbols=RUB,PLN'), true);

//calculate the RUB->PLN rate from rates given from API: EUR->RUB and EUR->PLN
$rub_to_pln_rate = $conversion_data["rates"]["PLN"]/$conversion_data["rates"]["RUB"];

//calculate the converted amount in PLN
$converted_amount = $amount_to_convert * $rub_to_pln_rate;

printf("%.4f", $converted_amount);
?>