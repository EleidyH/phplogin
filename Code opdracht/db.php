<?php
//Databaseconfiguratie
$host = 'localhost';
$dbname = 'user_database';
$username = 'root';
$password = '';

//maak een databaseverbinding met PDO
try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'Connectie mislukt: ' . $e->getMessage();
}

?>