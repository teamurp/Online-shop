<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'onlineshop');
	mysqli_query($con, "INSERT INTO product (title, descr, img, price) VALUES ('".$_GET["title"]."','".$_GET["desc"]."','".$_GET["img"]."','".$_GET["price"]."')");
	header("Location: index.php");
 ?>