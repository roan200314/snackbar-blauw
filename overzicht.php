<?php
require 'database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <a class="active" href="overzicht.php">product overzicht </a>
                    <a href="snackmaak.php">snack maken</a><?php
                                                        }
                                                    } ?>
            <a href="index.php">Home</a>
        </div>

        <?php
        $sql = "SELECT * FROM snacks ";

        if ($result = mysqli_query($mysqli, $sql)) {
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        ?>
        <table class="table">
            <thead>
                <h4>snacks</h4>
                <tr>
                    <th>name</th>
                    <th>cost price /</th>
                    <th>selling price /</th>
                    <th>category</th>
                </tr>
            </thead>
            <?php foreach ($users as $users) : ?>
                <tr>
                    <td><?php echo $users["name"] ?></td>
                    <td> / <?php echo $users["cost_price"] ?></td><br>
                    <td> / <?php echo $users["selling_price"] ?></td><br>
                    <td> / <?php echo $users["category"] ?></td><br>
                    <td><a href="snack-delete.php?id=<?php echo $users["id"] ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php endforeach; ?>
    </body>

</html>