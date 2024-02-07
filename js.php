<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <h4>I love my country</h4>
    <div class="test"></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 class="err text-danger">dddddd</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="" onsubmit="return check()">
        <input type="text" name="fname" class="fname">
        <button type="submit">Add</button>
    </form>

    <?php $name = [
        'name' => ['nMs' => 'Mamun', 'Hossen'],
        'age' => ['kamal', 'Habib'],
        'rol' => ['Isamil', 'Noman'],
    ];
    print_r($name);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        function check() {
            $('.err').html('');
            let name = $('.fname').val();
            if (name == '') {
                let err = "please enter the name";
                $('.err').html(err);
                $('#exampleModal').modal('show');
                return false

            }
        }
        let n1 = 8;
        let n2 = 5
        if (n1 != n2) {
            $('.err').html('');
            console.log('not equal');
            $('.err').html('Not equal number');
            // $('#test').click();
            // $('#exampleModal').modal('show');
        }
        let n = [
            [9, 4],
            [3, 4]
        ];




        // let custom_arr = n.flatMap(function(x) {
        //     return x * 2;
        // });
        // console.log(n);
        // console.log(custom_arr);
        // let custom_att2 = n.map(function(x) {
        //     return x.map((y) => y * 2);
        // });
        let custom = n.flatMap((x) => x.flatMap((y) => y * 2));
        console.log(custom);




        // for (let index = 0; index < n.length; index++) {
        //     console.log(n[index]);
        //     for (let i = 0; i < n[index].length; i++) {
        //         console.log(n[index][i]);
        //     }
        // }
    </script>


    <!-- Button trigger modal -->


    <!-- Modal -->


</body>

</html>