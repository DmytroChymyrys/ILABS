
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ILABS_test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/dmytro_test/public/">Home</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form action="/dmytro_test/public/signin" method="post" id="signin" class="navbar-form navbar-right" role="form">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="pass" value="" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>

                    </form>
                    <a class="navbar-brand" href="/dmytro_test/public/signup">Signup</a>
                </div>
            </ul>
        </div>
    </div>
</nav>
