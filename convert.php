<?php
$amount_to_convert = $_REQUEST["q"];
$conversion_data = json_decode(file_get_contents('http://api.fixer.io/latest?symbols=RUB,PLN'), true);
$rub_to_pln_rate = $conversion_data["rates"]["PLN"]/$conversion_data["rates"]["RUB"];
$converted_amount = $amount_to_convert * $rub_to_pln_rate;
echo $amount_to_convert . " RUB = " . $converted_amount . " PLN";
?>