<?php
require "database.php";

// data van form naar database.
if (isset($_POST['submit'])) {

    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];


    $sql = "INSERT INTO categorieen (naam, beschrijving)
     VALUES ('$naam','$beschrijving')";


    if (mysqli_query($conn, $sql)) {


        header("location: categorie_overzicht.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
