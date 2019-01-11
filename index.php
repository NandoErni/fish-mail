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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
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
        <form action="thankyou.php" method="post" class="form-inline my-2 my-lg-0">
            <button class="btn btn-danger my-2 my-sm-0" name="logoutSubmit" type="submit">Logout</button>
        </form>
    </div>
</nav>

<main role="main" class="container">
    <h1 class="text-center">Go fishing</h1>
    <div class="container">
        <form class="needs-validation" action="thankyou.php" method="post" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputsender">Sender</label>
                    <input type="email" class="form-control" id="inputsender" name="inputsender" placeholder="E-Mail" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputreceiver">Recipient</label>
                    <input type="email" class="form-control" id="inputreceiver" name="inputreceiver" placeholder="E-Mail" multiple required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control" id="inputsubject" name="inputsubject" placeholder="Subject" required>
                    <div class="invalid-feedback">
                        Please enter a subject.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputcc">CC</label>
                    <input type="email" class="form-control" id="inputcc" name="inputcc" placeholder="E-Mail" multiple>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control" rows="10" id="inputmessage" name="inputmessage" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" value="remember-me" required>
                    <label class="custom-control-label" for="remember-me">Accept terms & conditions</label>
                    <div class="invalid-feedback">
                        You need to accept our terms & conditions.
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="fishSubmit">Fish</button>
        </form>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <p class="text-center text-muted"><?php echo copyright() ?></p>
    </div>
</footer>

<script src="js/validate.js"></script>
<script defer src="js/script.js"></script>
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
