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
    <a class="navbar-brand" href="index.php">Fish-mail</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Pond</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Settings <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <a class="navbar-brand" href="#"><?php
            $res = $db->query('SELECT userType FROM TUser WHERE userName = "' . $_SESSION['userName'] . '"');

            while ($row = $res->fetchArray()) {
                echo $row['userType'];
            }
            ?></a>
        <form action="thankyou.php" method="post" class="form-inline my-2 my-lg-0">
            <button class="btn btn-danger my-2 my-sm-0" name="logoutSubmit" type="submit">Logout</button>
        </form>
    </div>
</nav>

<main role="main" class="container">
    <h1 class="text-center">Settings</h1>
    <div class="accordion" id="settingsaccordion">
        <div class="card">
            <div class="card-header" id="headingsignature">
                <a class="accordionlink" role="button" data-toggle="collapse" data-target="#collapsesignature" aria-expanded="true" aria-controls="collapsesignature">
                    <h5 class="font-weight-normal mb-0 my-2">
                        Signature
                    </h5>
                </a>
            </div>

            <div id="collapsesignature" class="collapse show" aria-labelledby="headingsignature" data-parent="#settingsaccordion">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="inputsignature">Set your signature here, and it will be saved for 60 days</label>
                                <textarea class="form-control" rows="5" id="inputsignature" name="inputsignature"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingpayment">
                <a class="accordionlink" role="button" data-toggle="collapse" data-target="#collapsepayment" aria-expanded="false" aria-controls="collapsepayment">
                    <h5 class="font-weight-normal mb-0 my-2">
                        Payment method
                    </h5>
                </a>
            </div>
            <div id="collapsepayment" class="collapse" aria-labelledby="headingpayment" data-parent="#settingsaccordion">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="inputpayment">Credit Card Details</label>
                                <textarea class="form-control" rows="5" id="inputpayment" name="inputpayment"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <p class="text-center text-muted"><?php echo copyright() ?></p>
    </div>
</footer>

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
