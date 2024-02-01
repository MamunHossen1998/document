<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Bangladesh is a small country</h4>
    <button type="button" onclick="document.write(7+8)">Click</button>
    <script>
        let price = 10;
        let vat = .25;
        let html = ` <h2>Price with vat ${(price*(1+vat)).toFixed(2)}</h2>`;
        document.querySelector("h4").innerHTML = html;
    </script>
</body>

</html>