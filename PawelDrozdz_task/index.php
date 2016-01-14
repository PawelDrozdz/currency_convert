<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>Currency Converter</title>
    <link rel="stylesheet" type="text/css" href="main_theme.css">
    <script src="script.js"></script>
</head>
<body>  
	<h1 class="title">Currency Converter</h1>
    <div id="converter">
		<h2 class="title">RUB-to-PLN Converter</h2>
        <form>
            RUB amount: <input type="text" id="varRUB"><br>
        </form>
        <button type="button" class="button" onclick="convertCurrency('varRUB')">Convert to PLN</button>
        <h2 id="convertedCurrency">Type the amount to convert and click "Convert to PLN"</h2>
    </div>
</body>
</html>