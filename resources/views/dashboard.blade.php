<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DASHBOARD</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h1>DASHBOARD</h1>

                        <h4>ID:</h4>
                        <h4>Name:</h4>

                        <h6>
                            <a href="/login">LOG OUT</a>
                        </h6>

                        <h3>TRANSACTION HISTORY</h3>

                        <table style="width:100%; border: 1px solid black; border-collapse: collapse">
                            <tr>
                                <td>Transaction</td>
                                <td>Transaction Date & Time:</td>
                            </tr>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction['transaction']}}</td>
                                <td>{{$transaction['date_and_time_of_transaction']}}</td>
                            </tr>
                            @endforeach
                        </table>
                        <br>
                        <h6>
                            <a href="/transaction">MAKE TRANSACTION</a>
                        </h6>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>