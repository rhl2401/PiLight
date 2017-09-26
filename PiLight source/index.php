<?php
$pass = md5(strtolower(isset($_POST['pass']) ? $_POST['pass'] : null));
$user = strtolower(isset($_POST['user']) ? $_POST['user'] : null);


//Very simple username and password protection encrypted with md5. Should not be used!! (default is: "user: admin" and "pass:admin")
if($pass == "21232f297a57a5a743894a0e4a801fc3" && $user == "admin") {
    include("home.php");
} else
{
    if(isset($_POST))
    {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PiLight</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Work with Microsoft's live tiles -->
    <meta name="application-name" content="PiLight"/>
    <meta name="msapplication-square70x70logo" content="img/win_tile/small.jpg"/>
    <meta name="msapplication-square150x150logo" content="img/win_tile/medium.jpg"/>
    <meta name="msapplication-wide310x150logo" content="img/win_tile/wide.jpg"/>
    <meta name="msapplication-square310x310logo" content="img/win_tile/large.jpg"/>


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sliders.css">


    <style>
            html {
                background: url(http://wickedhq.com/uploads/monthly_2016_06/55.jpg.17a303f7dc9a2c267a2c85fc03611115.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: rgba(0,0,0,0);
            }
            body {
                background-color: rgba(0,0,0,0);
            }
            form {
                margin-top: 30px;
            }
    </style>
</head>

    <body class="container-fluid">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <img src="img/logo.png" alt="logo" class="img-responsive img-center">
            <form method="POST" action="index.php">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="form-group">
                        <label for="inputUser">Username</label>
                        <input type="text" class="form-control" id="inputUser" placeholder="Username" name="user">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
                    </div>
                    <input class="btn btn-info" type="submit" name="submit" value="Login"></input>
                </div>
            </form>
        </div>
    </body>
    <?php
    }
}
?>
