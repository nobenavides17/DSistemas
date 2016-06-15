<?php
	$user="root";
	$pass="12345678";
	$db="valuo";

	try {
			$conexion = new PDO('mysql:host=localhost;dbname='.$db, $user , $pass);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}	
?>
