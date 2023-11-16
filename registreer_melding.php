<?php
require "database.php";

// data van form naar database.
if (isset($_POST['submit'])) {

    $gebruiker_id = $_POST['gebruiker_id'];
    $bericht = $_POST['bericht'];
    $status = $_POST['status'];
    $categorie_id = $_POST['categorie_id'];
    $datum = $_POST['datum'];
    $opmerking = $_POST['opmerking'];
    $personeel_id = $_POST['personeel_id'];

    $sql = "INSERT INTO meldingen (gebruiker_id, bericht, status, categorie_id, datum, opmerking, personeel_id)
     VALUES ('$gebruiker_id','$bericht','$status','$categorie_id', '$datum', '$opmerking', '$personeel_id')";


    if (mysqli_query($conn, $sql)) {


        header("location: meldingen_overzicht.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
