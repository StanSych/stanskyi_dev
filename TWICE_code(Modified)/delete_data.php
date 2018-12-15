<?php
	
	include_once('connect.php');
	global $mysqli;

	if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo $id;
        $sql = "DELETE FROM pizza WHERE PizzaID = '$id'";
        $result = $mysqli->query($sql);
      }

?>