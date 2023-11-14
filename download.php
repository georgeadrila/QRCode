<?php
include 'connection.php'; // Database connection file

// Fetch the ID of the last inserted row in the "userdata" table
$stmt = $pdo->query("SELECT MAX(id) FROM userdata");
$id = $stmt->fetchColumn();

// Fetch the QR code file associated with the last inserted row
$stmt = $pdo->prepare("SELECT qrcode FROM userdata WHERE id = ?");
$stmt->execute([$id]);
$file = $stmt->fetch(PDO::FETCH_ASSOC);
$file_url = $file['qrcode'];

// Download the file
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url); 
?>
