<?php
require 'database.php';
$alleGebruikers = $conn->query("SELECT * FROM gebruikers ");
$gebruikers = $alleGebruikers->fetch_all(MYSQLI_ASSOC);

$alleCategorieen = $conn->query("SELECT * FROM categorieen ");
$categorieen = $alleCategorieen->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer meldingen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="registreer_melding.php" method="POST" class="mt-5" style="max-width:480px; margin:auto;">
                        <div class="row">
                            <h1 class="mb-3" style="color: #0d6efd ;">Meldingen invoeren</h1>

                            <div class="mb-1 col-md-6">
                                <label for="gebruiker_id">gebruiker id</label>
                                <select name="gebruiker_id" id="gebruiker_id" class="form-control" required autofocus>
                                    <?php foreach ($gebruikers  as $gebruiker) { ?>

                                        <option value="<?php echo $gebruiker["id"] ?>"><?php echo $gebruiker["voornaam"] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="bericht">Bericht</label>
                                <input type="text" name="bericht" id="bericht" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="status">status:</label>
                                <select name="status" id="status" class="form-control" required autofocus>
                                    <option value="verwerken">Verwerken</option>
                                    <option value="gesloten">Gesloten</option>
                                </select>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="categorie_id">Categorie id</label>
                                <select name="categorie_id" id="categorie_id" class="form-control" required autofocus>
                                    <?php foreach ($categorieen  as $categorie) { ?>

                                        <option value="<?php echo $categorie["id"] ?>"><?php echo $categorie["naam"] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="datum">Datum</label>
                                <input type="date" name="datum" id="datum" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mb-1 col-md-6">
                                <label for="personeel_id">Personeel id</label>
                                <input type="text" name="personeel_id" id="personeel_id" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mb-1 col-md-12">
                                <label for="opmerking">Opmerking</label>
                                <input type="text" name="opmerking" id="opmerking" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mt-1 col-md-12 ">
                                <button type="submit" name="submit" id="sumbit" class="btn btn-outline-primary">Stuur melding</button>
                            </div>
                        </div>
                        <p class="mt-3 col-md-12 "><a href="home.php"> Terug naar home</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>