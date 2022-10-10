<?php
require "database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <script src="javascript/index.js" defer></script>
    <title>Snackbar blauw</title>
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
                    <a href="snackmaak.php">snack maken</a><?php
                                                        }
                                                    } ?>
            <a class="active" href="index.php">Home</a>
        </div>

        <?php
        if (!empty($_SESSION['userData'])) {
            if ($_SESSION["userData"]["role"] == "medewerker" || "gebruiker") {

                $sql = "SELECT * FROM snacks ";

                if ($result = mysqli_query($mysqli, $sql)) {
                    $snacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
         ?>
                <table class="table">
                    <thead>
                        <h4>snacks</h4>
                        <tr>
                            <th>name</th>
                            <th>selling price</th>
                            <th>category</th>
                        </tr>
                    </thead>
                    <?php foreach ($snacks as $snack) : ?>
                        <tr>
                            <td><?php echo $snack["name"] ?></td>
                            <td>$<?php echo $snack["selling_price"] ?></td>
                            <td><?php echo $snack["category"] ?></td>
                            <td><a href="additem.php?product_id=<?php echo $snack["id"] ?>">Add</a></td>
                            <td>
                                <img src="images/<?php echo $snack["image"] ?>" alt="" width="300" height="200">

                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
                <form action="logout.php" method="post">
            <button type="submit" value="submit">Bestel</button>
        </form>
        <?php }
        } ?>

        <form action="logout.php" method="post">
            <button type="submit" value="submit">uitloggen</button>
        </form>


        </main>

    </body>

</html>