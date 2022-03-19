<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOGIN</title>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    <h1>LOGIN</h1>
                        <form action="/dashboard" method="GET">
                            @csrf
                            <label for="fname">ID Number:</label><br>
                            <input type="text" id="id" name="login_id"><br>

                            <label for="fname">PIN:</label><br>
                            <input type="password" id="pin" name="login_pin"><br> <br>

                            <input class="btn btn-primary" type="submit" value="Log In">
                        </form>

                        <h1>
                            <a href="/signup">SIGN UP</a>
                        </h1>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>