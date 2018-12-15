<?php
	
	include_once('connect.php');
	global $mysqli;

	if(isset($_POST['name'])){
        $newName = $_POST['name'];
        $id = $_POST['id'];
        $price = $_POST['price'];
        $top1 = $_POST['topping_one'];
        $top2 = $_POST['topping_two'];
        $top3 = $_POST['topping_three'];
        echo $id;
        $sql = "INSERT INTO pizza (PizzaName, PizzaPrice, PizzaToppingOne, PizzaToppingTwo, PizzaToppingThree) VALUES ('$newName', $price, '$top1', '$top2', '$top3')";
        $result = $mysqli->query($sql);
      }

?>