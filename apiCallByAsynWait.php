<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Api call by asyn await</h4>



    <script>
        console.log(`Api call by asyn await`);
        const makeRequest = async (url, config) => {
            let data = await fetch(url, config);
            if (!data.ok) {
                throw new Error(`Error ${data.status}`)
            }
            let res = await data.json();
            return res;
        }
        const sendData = () => {
            makeRequest('https://jsonplaceholder.typicode.com/posts', {
                    method: 'POST',
                    body: JSON.stringify({
                        title: 'foo',
                        body: 'bar',
                        userId: 1,
                    }),
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                    },
                })
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                })


        }
        sendData();
        // const getData = () => {
        //     makeRequest('https://jsonplaceholder.typicode.com/posts')
        //         .then((res) => {
        //             console.log(res);
        //         })
        //         .catch((err) => {
        //             console.log(err);
        //         })


        // }
        // getData();
    </script>
</body>

</html>