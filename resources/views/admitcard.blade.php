<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Admit Card.</title>

</head>

<body>
    <div class="card text-center mt-2" style="width:100%; margin:auto;">
        <div class="text-center">
            <img src="assets/images/rku.jpg" class="m-3" height="100" width="190" alt="" />
        </div>
        <hr>
        <h1 class="">Admit Card</h1>
        <hr>
        <h4>Dear {{$user[0]->name}},</h4>
        <h4>your exam is scheduled on {{$paymentdate[0]}}.</h4>
        <hr>
        <div class="table-responsive" style="width:90%;margin:auto; font-size:12px;font-style:normal;">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Exam Date</th>
                    <th scope="col">Mobile No</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>{{$course[0]}}</th>
                    <th>{{$user[0]->name}}</th>
                    <th>{{$user[0]->fathername}}</th>
                    <th>{{$user[0]->id}}</th>
                    <th>{{$paymentdate[0]}}</th>
                    <th>{{$user[0]->mobile}}</th>


                </tr>
            </tbody>
        </table>
        </div>
        <p>Kindly login in to the portal and click on the button names "Test" on the left side to start it.</p>
    </div>
</body>

</html>