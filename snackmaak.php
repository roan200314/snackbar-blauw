<?php
session_start()
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorie delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <body style="background-color: white;">
        <div class="topnav">
            <h1 class="topname">Snackbar</h1>
            <a href="registreren.php">Registreren</a>
            <a href="inloggen.php">Inloggen</a>
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker") {
            ?>
                    <a href="overzicht.php">product overzicht </a>
                    <a class="active" href="snackmaak.php">snack maken</a><?php
                                                                        }
                                                                    } ?>
            <a href="index.php">Home</a>
        </div>
    </body>

</html>
<form action="snackmaakCheck.php" method="post">

    <div class="container">
        <label for="categorie"><b>name</b></label>
        <input type="text" placeholder="Enter snack name" name="name" required>
    </div>

    <div class="container">
        <label for="selling price"><b>selling price</b></label>
        <input type="text" placeholder="Enter selling price" name="selling_price" required>
    </div>

    <div class="container">
        <label for="cost price"><b>cost price</b></label>
        <input type="text" placeholder="Enter cost price" name="cost_price" required>
    </div>

    <div class="container">
        <label for="category"><b>category</b></label>
        <input type="text" placeholder="Enter category" name="category" required>
    </div>

    <button type="submit">maak!</button>
</form>