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
    <h1 class="text-center">Impressum</h1>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Kontaktadresse</h3>
            <br>
            <p class="text-center">IMS Frauenfeld <br>
                Ringstrasse 10 <br>
                CH-8501 Frauenfeld</p>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Informationen</h3>
            <br>
            <p class="text-center">Telefon: +41 79 123 45 67 <br>
                E-Mail: yeet@yoop.mail</p>
            <br>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="text">
                <h3 class="text-center">Der Zweck der Seite</h3>
                <p class="text-justify">Mit den Daten von <a href="https://ogd.tg.ch">Open Government Data Thurgau</a> werden wir eine
                    Web-Appliaktion entwickeln, die die Luftschadstoffbelastung im Kanton Thurgau ersichlich macht.
                    Der Benutzer kann zwischen den Jahren 2005, 2010, 2015, 2020, 2030 und zwischen Stickstoffdioxid und
                    Feinstaub auswählen, welches Jahr und welcher Schadstoff auf der Karte erscheinen soll.

                    Unsere Aufgabe ist, die Web-Applikation möglichst gut umzusetzen und diese ergonomisch wie
                    möglich den Interessenten freizugeben.</p>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Unser Team</h3>
            <br>
            <p class="text-center">Nando Erni<br>
                Pascal Leone</p>
        </div>
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
