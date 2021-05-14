<?php
// create database connection
try{
	
	$conn = new PDO('mysql:host=localhost;dbname=summer_holidays', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
		echo $e->getMessage();
	}
 

?>