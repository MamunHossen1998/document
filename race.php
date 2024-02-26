<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Race function in promise</h3>

    <script>
        const p1 = new Promise((resolve, reject) => {
            let result = 2;
            if (result == 2) {
                setTimeout(() => {
                    resolve('Success one');
                }, 2000)
            } else {
                reject('Fail')
            }
        })
        const p2 = new Promise((resolve, reject) => {
            let result = 2;
            if (result == 2) {
                setTimeout(() => {
                    resolve('Success two');
                }, 1000)
            } else {
                reject('Fail')
            }
        })
        Promise.race([p1,p2])
            .then((res) => {
                console.log(res);
            })
    </script>
</body>

</html>