<?php

print_r($_POST);
if ($_POST['name'] != '' && $_POST['selling_price'] != '' && $_POST['cost_price'] != '' && $_POST['category'] != '') {

    $name = $_POST['name'];
    $selling_price = $_POST['selling_price'];
    $cost_price = $_POST['cost_price'];
    $category = $_POST['category'];


    require "database.php";

    $sql = "INSERT INTO snacks (name, selling_price, cost_price, category)
    VALUES ('$name', '$selling_price', '$cost_price', '$category')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
