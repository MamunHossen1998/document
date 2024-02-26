<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Call api by fetch</h3>
    <input class="pass" type="password" placeholder="Enter your password"><button class="btn">Click</button>


    <script>
        // console.log(btn);

        console.log(`fetch api`);
        fetch('https://jsonplaceholder.typicode.com/posts/1', {
                method: 'DELETE',
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                },
                body: JSON.stringify({
                }),

            })
            .then((res) => {
                if (!res.ok) {
                    throw new Error(`Error ${res.status}`);
                }
                return res.json();
            })
            .then((res) => console.log(res))
            .catch((err) => {
                console.log(err);
            })
    </script>
</body>

</html>