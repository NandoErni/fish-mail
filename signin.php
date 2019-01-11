<?php
include "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Fish-Mail</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

</head>
<body class="text-center">
<form class="form-signin" action="signin.php" method="post">
    <img class="mb-4" src="img/fishing.png" alt="" width="150" height="150">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputemail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="inputemail" class="form-control" placeholder="E-Mail"
           required autofocus>
    <label for="inputpassword" class="sr-only">Password</label>
    <input type="password" id="inputpassword" name="inputpassword" class="form-control" placeholder="Password" required>
    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" value="remember-me">
        <label class="custom-control-label" for="remember-me">Remember me</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted"><?php echo copyright() ?></p>
</form>
</body>
</html>
