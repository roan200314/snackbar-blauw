<?php

session_start();

require "database.php";


$product_id = $_GET['product_id'];



if (!empty($_SESSION['userData']['id'])) {
    $user_id = $_SESSION['userData']['id'];

    $sql = "INSERT INTO orders (id, name, orders)
VALUES ($user_id, $product_id, 'besteld', 1)";
    $mysqli->query($sql);
    $mysqli->close();
    header("Location: index.php");
} else {
    header("Location: inloggen.php");
}
