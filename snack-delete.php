<?php


require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM snacks WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    header("location: index.php");
}
