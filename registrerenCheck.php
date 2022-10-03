<?php

print_r($_POST);
if ($_POST['email'] != '' && $_POST['password'] != '' ) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    require "database.php";

    $sql = "INSERT INTO accounts (email, password)
    VALUES ('$email', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
