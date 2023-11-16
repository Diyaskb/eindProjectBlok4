<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meldingen Systeem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <div class="row">
                        <h1 class="mb-3" style="color: #0d6efd ;"> Welkom bij Meld meldingen!</h1>
                        <p class="mb-3" style="color: #0d6efd ;"> Kies wat u wilt doen.</p>

                        <form action="gebruiker_maak.php">
                            <div class="mt-1 col-md-6 ">
                                <button class="btn btn-outline-primary"> Registreer een gebruiker</button>
                            </div>
                        </form>

                        <form action="gebruiker_overzicht.php">
                            <div class="mt-1 col-md-6 ">
                                <button class="btn btn-outline-primary"> Gebruikers overzicht</button>
                            </div>
                        </form>

                        <form action="melding_maak.php">
                            <div class="mt-1 col-md-12 ">
                                <button class="btn btn-outline-primary"> Maak een melding</button>
                            </div>
                        </form>

                        <form action="meldingen_overzicht.php">
                            <div class="mt-1 col-md-12 ">
                                <button class="btn btn-outline-primary"> Meldingen overzicht</button>
                            </div>
                        </form>

                        <form action="categorie_maak.php">
                            <div class="mt-1 col-md-12 ">
                                <button class="btn btn-outline-primary"> Maak een categorie</button>
                            </div>
                        </form>


                        <form action="categorie_overzicht.php">
                            <div class="mt-1 col-md-12 ">
                                <button class="btn btn-outline-primary"> Categorie overzicht</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>