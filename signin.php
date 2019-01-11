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

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

</head>
<body class="text-center">
<form class="form-signin needs-validation" action="signin.php" method="post" novalidate>
    <img class="mb-4" src="img/fishing.png" alt="" width="150" height="150">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


    <?php
    if(isset($_POST['loginSubmit'])){
        if(login($_POST['inputusername'], $_POST['inputpassword'])){

            $_SESSION['userName'] = $_POST['inputusername'];
            header("Location: index.php"); /* Redirect browser */
            exit();
        } else {
            echo "<h6 class=\"\">Username or Password incorrect</h6>";
        }
    }

    ?>


    <label for="inputusername" class="sr-only">Username</label>
    <input type="text" id="inputusername" name="inputusername" class="form-control" placeholder="Username"
           required autofocus>
    <label for="inputpassword" class="sr-only">Password</label>
    <input type="password" id="inputpassword" name="inputpassword" class="form-control" placeholder="Password" required>
    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" value="remember-me">
        <label class="custom-control-label" for="remember-me">Remember me</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginSubmit">Sign in</button>
    <p class="mt-5 mb-3 text-muted"><?php echo copyright() ?></p>
</form>

<script src="js/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

</body>
</html>
