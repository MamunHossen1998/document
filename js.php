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
        let text1 = "Mamun";
        let text2 = " Mamun  ";
        let text3 = text2.trimEnd();
        console.log(`text1 length ${text1.length}`);
        console.log(`text2 length ${text2.length}`);
        console.log(`text3 length ${text3.length}`);
        let n1 = 'Mamun ';
        console.log(`after pads ${n1.padEnd(10,0)}`);
    </script>
</body>

</html>