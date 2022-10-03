<?php
require "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <title>Snackbar blauw</title>
</head>

<body>

    <body style="background-color: white;">
        <div class="topnav">
            <h1 class="topname">melding management</h1>
            <a href="registreren.php">Registreren</a>
            <a href="inloggen.php">Inloggen</a>
            <a href="gebruiker-Overzicht.php">gebruikers overzicht</a>
            <a href="meldingen.php">melding maken</a>
            <a class="active" href="Homepagina.php">Home</a>
        </div>



            <form action="logout.php" method="post">
                <button type="submit" value="submit">uitloggen</button>
            </form>


        </main>

    </body>

</html>