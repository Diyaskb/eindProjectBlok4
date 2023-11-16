<?php
require "database.php";

// data van form naar database.
if (isset($_POST['submit'])) {

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $geboortedatum = $_POST['geboortedatum'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $rol = $_POST['rol'];

    $sql = "INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord, geboortedatum, telefoonnummer, rol)
     VALUES ('$voornaam','$achternaam','$email','$wachtwoord', '$geboortedatum', '$telefoonnummer', '$rol')";


    if (mysqli_query($conn, $sql)) {


        header("location: gebruiker_overzicht.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
