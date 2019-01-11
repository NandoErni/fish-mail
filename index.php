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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">fish-mail.ch</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pond <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="settings.php">Settings</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <h1 class="text-center">Go fishing</h1>
    <div class="container">
        <form action="thankyou.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputsender">Sender</label>
                    <input type="email" class="form-control" id="inputsender" name="inputsender" placeholder="E-Mail" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputreceiver">Recipient</label>
                    <input type="password" class="form-control" id="inputreceiver" name="inputreceiver" placeholder="E-Mail" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputreceiver">Subject</label>
                    <input type="password" class="form-control" id="inputreceiver" name="inputreceiver" placeholder="Subject" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputcc">CC</label>
                    <input type="email" class="form-control" id="inputcc" name="inputcc" placeholder="E-Mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control" rows="10" id="inputmessage" name="inputmessage" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" value="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Fish</button>
        </form>
    </div>
</main>

<script src="js/script.js"></script>
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
