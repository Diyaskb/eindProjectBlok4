<?php

session_start();
require 'database.php';


if (isset($_POST['submit'])) {

    $useremail  = $_POST['email'];
    $userpass   = $_POST['wachtwoord'];

    $sql = "SELECT * FROM gebruikers WHERE email = '$useremail' AND wachtwoord = '$userpass' ";

    $query = mysqli_query($conn, $sql);

    if (!is_bool($query)) { //als true dan dit uitvoeren
        if (mysqli_num_rows($query) > 0) {
            $data_uit_database = mysqli_fetch_array($query, MYSQLI_ASSOC);

            $_SESSION['email'] = $data_uit_database['email'];
            $_SESSION['password'] = $data_uit_database['password'];
            $_SESSION['role'] = $data_uit_database['role'];

            switch ($data_uit_database['role']) {
                default:
                    $location = "home";
                    break;
            }

            header("location: $location.php");
        }
    }
}
?>
<!-- <!DOCTYPE html>
<html>

<head>

</head>

<body>
    <form method="POST">


        <input type="email" name="email" placeholder="email">
        <input type="password" name="wachtwoord" placeholder="password">

        <button type="submit" name="submit" id="login"> inlog</button><br>
    </form>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="" method="POST" class="mt-5" style="max-width:480px; margin:auto;">
                        <div class="row">
                            <h1 class="mb-3" style="color: #0d6efd ;">Log in</h1>
                            <div class="mb-1 col-md-6">
                                <label for="email">email</label>
                                <input type="email" name="email" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="wachtwoord">Wachtwoord</label>
                                <input type="password" name="wachtwoord" class="form-control" required autofocus>
                            </div>
                            <br>


                            <div class="mt-1 col-md-12 ">
                                <button type="submit" name="submit" id="sumbit" class="btn btn-outline-primary">Log in</button>
                            </div>
                        </div>
                        <p class="mt-3 col-md-12 ">Geen account? <a href="gebruiker_maak.php"> Registreer u dan hier.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>