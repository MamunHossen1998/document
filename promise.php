<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Promise</h4>

    <script>
        console.log(`Promise`);
        const p1 = new Promise((resolve, reject) => {
            let data = true;
            if (data == true) {
                resolve('Success');
            } else {
                // throw new Error("error");
                reject(new Error(`its fail`))
            }

        })
        const p2 = new Promise((resolve,reject)=>{
            let age = 12;
            if(age == 12){
                resolve(`age is ${age}`)
            }else{
                reject(`its fail two`)
            }
        })
       Promise.all([p1,p2])
            .then(([res,res2]) => {
                console.log(res);
            })
            .catch((err) => {
                console.log(err.message);
            })
    </script>
</body>

</html>