<?php
session_start();
//session_unset();
//session_destroy();
header('Location:products.php');

	if(!empty($_SESSION["cart"])) {
		foreach($_SESSION["cart"] as $k => $v) {
			if($_GET["id"] == $k)
				unset($_SESSION["cart"][$k]);				
			
		}
	}
	
?>