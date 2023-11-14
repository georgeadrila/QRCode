<?php
// connect to qrcodes database using pdo


// Database details
$db_host = "localhost";
$db_name = "qrcodes";
$db_user = "root";
$db_pass = "";

// Create a new PDO object and set the error mode
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>
