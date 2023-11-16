<?php
require 'database.php';

$alleGebruikers = $conn->query("SELECT * FROM gebruikers ");
$gebruikers = $alleGebruikers->fetch_all(MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruikers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <h1 class="mb-3 " style="color:  #0d6efd;">Gebruikers overzicht</h1>

    <table class="table table-sm">
        <thead>
            <tr style="color: #0d6efd;">
                <th>Id</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Geboortedatum</th>
                <th>Telefoonnummer</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gebruikers as $gebruiker) { ?>
                <tr style="color: #0d6efd;">
                    <td><?php echo $gebruiker["id"] ?></td>
                    <td><?php echo $gebruiker["voornaam"] ?></td>
                    <td><?php echo $gebruiker["achternaam"] ?></td>
                    <td><?php echo $gebruiker["email"] ?></td>
                    <td><?php echo $gebruiker["geboortedatum"] ?></td>
                    <td><?php echo $gebruiker["telefoonnummer"] ?></td>
                    <td><?php echo $gebruiker["rol"] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p class="mt-3 col-md-12 "><a href="home.php"> Terug naar home</a></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>