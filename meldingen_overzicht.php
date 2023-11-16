<?php
require 'database.php';

$alleMeldingen = $conn->query("SELECT meldingen.id, gebruikers.voornaam , bericht, status, categorieen.naam, datum, opmerking, personeel_id FROM `meldingen`
JOIN categorieen ON categorieen.id = meldingen.categorie_id
JOIN gebruikers ON gebruikers.id = meldingen.gebruiker_id;");
$meldingen = $alleMeldingen->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>meldingen</title>
</head>

<body>
    <h1 class="mb-3">meldingen overzicht</h1>

    <table class="table ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Gebruiker naam</th>
                <th>Bericht</th>
                <th>Status</th>
                <th>Categorie naam</th>
                <th>Datum</th>
                <th>Opmerking</th>
                <th>Personeel id</th>



            </tr>
        </thead>
        <tbody>
            <?php foreach ($meldingen as $melding) { ?>
                <tr>
                    <td><?php echo $melding["id"] ?></td>
                    <td><?php echo $melding["voornaam"] ?></td>
                    <td><?php echo $melding["bericht"] ?></td>
                    <td><?php echo $melding["status"] ?></td>
                    <td><?php echo $melding["naam"] ?></td>
                    <td><?php echo $melding["datum"] ?></td>
                    <td><?php echo $melding["opmerking"] ?></td>
                    <td><?php echo $melding["personeel_id"] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p class="mt-3 col-md-12 "><a href="home.php"> Terug naar home</a></p>
</body>

</html>