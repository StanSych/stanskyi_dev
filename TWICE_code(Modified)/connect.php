<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Twicedeal";

    $mysqli = new mysqli($host, $username, $password, $dbname);

    $result = $mysqli->query("SELECT PizzaName FROM pizza");

    // if($result == true){
    //     echo "Results Exist";
    // }else{
    //     echo "No Results";
    // }

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>