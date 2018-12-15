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
        $sql = "UPDATE PIZZA SET PizzaName='$newName', PizzaPrice=$price, PizzaToppingOne='$top1', PizzaToppingTwo = '$top2', PizzaToppingThree = '$top3' WHERE PizzaID='$id'";
        $result = $mysqli->query($sql);
      }

?>