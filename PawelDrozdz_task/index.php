<!DOCTYPE html>
<html>
<head>
    <!-- 
    Paweł Drożdż
    PawelDrozdz_task\index.php 
    single page application for converting RUB to PLN with public API 
    -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>Currency Converter</title>
    <link rel="stylesheet" type="text/css" href="main_theme.css">
    <script src="script.js"></script>
</head>
<body>  
	<h1>Currency Converter</h1>
	<!-- beginning of the converter UI -->
    <div id="converter">
		<h2>RUB-to-PLN Converter</h2>
        <form>
            RUB amount: <input type="text" id="varRUB"><br>
        </form>
		<!-- custom button calling script.js on click -->
        <button type="button" class="button" onclick="convertCurrency('varRUB')">Convert to PLN</button>
		<!-- header element modified by script.js and presenting the data -->
        <h2 id="convertedCurrency">Type the amount to convert and click "Convert to PLN"</h2>
    </div>
</body>
</html>