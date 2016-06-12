<?php
	$user="root";
	$pass="12345678";
	$database="valuo";

	try {
			$conexion = new PDO('mysql:host=localhost;dbname='.$database, $user , $pass);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}	
?>
