<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Twicedeal";

    $mysqli = new mysqli($host, $username, $password, $dbname);

    $result = $mysqli->query("
        SELECT 
        PizzaName, 
        PizzaToppingOne, 
        PizzaToppingTwo, 
        PizzaToppingThree,
        PizzaPrice 
        FROM `Twicedeal.PIZZA`
    ");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>