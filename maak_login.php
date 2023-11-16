<?php
// WERKT NOG NIET
if (isset($_POST["email"])) {
    require 'database.php';

    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $sql = "SELECT * FROM gebruikers WHERE email = '$email' AND wachtwoord = '$wachtwoord' ";

    $resultaat = mysqli_query($conn, $sql);

    $gebruikers = mysqli_fetch_assoc($resultaat);
    echo "U bent nu ingelogd";
}
