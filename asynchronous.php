<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Asynchronous</h3>


    <script>
        console.log(`Asynchronous`);
        const one = (callback) => {
            console.log('test one');
            callback();
        }
        const two = (callback) => {
            console.log('test two');
            callback();
        }
        const three = (callback) => {
            setTimeout(() => {
                console.log('test three');
                callback()
            }, 500)

        }
        const four = (callback) => {
            console.log('test four');
            callback();
        }
        const five = () => {
            console.log('test five');
        }
        one(() => {
            two(() => {
                three(() => {
                    four(() => {
                        five();
                    });
                });
            });
        });


        const square = (x) => {
            return x ** x;
        }
        const higherOrder = (y, value) =>  y(value)
        
        const y = square;
        const output = higherOrder(y, 5);
        console.log(`output ${output}`);
    </script>
</body>

</html>