<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TRANSACTION</title>
</head>

<body>
    <h1>DASHBOARD | WITHDRAW | ADD</h1>
    <form action="/dashboard" method="GET">
        @csrf
        <label for="fname">Withdraw Value:</label><br>
        <input type="text" id="id" name="withdraw_id"><br>

        <label for="fname">PIN:</label><br>
        <input type="text" id="pin" name="withdraw_value"><br> <br>

        <input type="submit" value="WITHDRAW">
        <br>
        <br>
        <label for="fname">Withdraw Value:</label><br>
        <input type="text" id="id" name="deposit_id"><br>

        <label for="fname">PIN:</label><br>
        <input type="text" id="pin" name="deposit_value"><br> <br>

        <input type="submit" value="DEPOSIT">
    </form>
    <h6>
        <a href="/dashboard">LOG OUT</a>
    </h6>
</body>

</html>