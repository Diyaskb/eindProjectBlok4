<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer categorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="registreer_categorie.php" method="POST" class="mt-5" style="max-width:480px; margin:auto;">
                        <div class="row">
                            <h1 class="mb-3" style="color: #0d6efd ;">Registreer categorie</h1>

                            <div class="mb-1 col-md-12">
                                <label for="naam">Naam</label>
                                <input type="text" name="naam" id="naam" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mb-1 col-md-12">
                                <label for="beschrijving">Beschrijving</label>
                                <input type="text" name="beschrijving" id="beschrijving" class="form-control" required autofocus>
                            </div>
                            <br>

                            <div class="mt-1 col-md-12 ">
                                <button type="submit" name="submit" id="sumbit" class="btn btn-outline-primary">Registreer Categorie</button>
                            </div>
                            <p class="mt-3 col-md-12 "><a href="home.php"> Terug naar home</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>