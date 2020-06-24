<?php
	try{
		$connect = new PDO("mysql:host=127.0.0.1;dbname=binomeadld", "root", "");
		 // $connect = new PDO("mysql:host=mysql-ldsteve.alwaysdata.net;dbname=ldsteve_bd_quizz", "ldsteve", "SONATELODC");
	}
	catch(PDOException $e){
		echo 'Echec'.$e->getMessage();
	}
?>