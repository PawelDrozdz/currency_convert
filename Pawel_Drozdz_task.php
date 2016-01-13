<!DOCTYPE html>
<html>
  <head>
    <title>Currency Converter</title>
    <link rel="stylesheet" type="text/css" href="main_theme.css">
    <script src="script.js"></script>
  </head>
<body>
    <div class="background">   
        <div id="converter">
            <h1 class="title">Currency Converter</h1>
            <form>
                RUB: <input type="text" id="varRUB"><br>
			<button type="button" onclick="convertCurrency('varRUB')">Convert to PLN</button>
            </form>
            <h3 id="convertedCurrency">Type the amount to convert and click "Convert to PLN"</p>
        </div>
    </div>
</body>
</html>