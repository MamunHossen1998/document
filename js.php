<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>I love my country</h4>
    <div class="test"></div>

    <script>
        let students = [
            ['John', 'Sara', 'Jack']
        ];

        // using forEach
        students.forEach(myFunction);

        function myFunction(item) {

             let s = item.forEach(test);
        }

        function test(value) {
            console.log(value);
        }
        // document.querySelector('.test').innerHTML = text;
    </script>
</body>

</html>