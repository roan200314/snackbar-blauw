<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <title>inloggen snackbar</title>
</head>

<body>

    <body style="background-color: white;">
        <div class="topnav">
            <h1 class="topname">Snackbar</h1>
            <a href="registreren.php">Registreren</a>
            <a class="active" href="inloggen.php">Inloggen</a>
            <a href="index.php">Home</a>
        </div>

        <div class="Hero"></div>



    </body>

    <h2>Login</h2>

    <form action="inloggenCheck.php" method="post">

        <div class="container">
            <label for="email"><b>E-Mail</b></label>
            <input type="text" placeholder="Enter E-Mail" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>


            <button type="submit" value="submit">Login</button>
        </div>


    </form>



</html>