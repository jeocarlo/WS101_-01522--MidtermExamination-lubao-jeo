<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SIGNUP</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h1>SIGN UP</h1>
                        <form action="/" method="$_GET">
                            @csrf
                            <label for="fname">Name:</label><br>
                            <input type="text" name="name"><br>

                            <label for="fname">PIN:</label><br>
                            <input type="password" name="pin"><br> <br>

                            <input class="btn btn-primary" type="submit" value="Sign Up">
                        </form>
                        <br>
                        <h6>
                            <a href="/login">LOG IN</a>
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