<?php
require 'database.php';

$alleCategorieen = $conn->query("SELECT * FROM categorieen ");
$categorieen = $alleCategorieen->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Categorieën</title>
</head>

<body>
    <h1>Categorieën overzicht</h1>
    <table class="table ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Naam</th>
                <th>Beschrijving</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorieen as $categorie) { ?>
                <tr>
                    <td><?php echo $categorie["id"] ?></td>
                    <td><?php echo $categorie["naam"] ?></td>
                    <td><?php echo $categorie["beschrijving"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p class="mt-3 col-md-12 "><a href="home.php"> Terug naar home</a></p>
</body>

</html>