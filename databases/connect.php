<?php
$pdo = new PDO("mysql:host=localhost;dbname=hotel", "root", "1234");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$pdo->exec ( "SET NAMES \"utf8\"" );
?>