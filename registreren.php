<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    session_start();
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <title>registreren snackbar</title>
    </head>

    <body>

        <body style="background-color: white;">
            <div class="topnav">
                <h1 class="topname">Snackbar</h1>
                <a class="active" href="registreren.php">Registreren</a>
                <a href="inloggen.php">Inloggen</a>
                <?php
                if (!empty($_SESSION['userData'])) {
                    if ($_SESSION["userData"]["role"] == "medewerker") {
                ?>
                        <a href="overzicht.php">product overzicht </a>
                        <a href="snackmaak.php">snack maken</a><?php
                                                            }
                                                        } ?>
                <a href="index.php">Home</a>
            </div>

            <div class="Hero">
                <p id="txt"></p>
            </div>

            <body>

                <h2>Register</h2>

                <form action="registrerenCheck.php" method="post">

                    </div>

                    <div class="container">
                        <label for="email"><b>email</b></label>
                        <input type="text" placeholder="Enter E-mail" name="email" required>

                        <label for="password"><b>password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>


                        <button type="submit">Register</button>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">

                    </div>
                </form>

            </body>

    </html>
</body>

</html>