<?php
require_once 'qrlib.php';


do {
    $url = $_GET['url'];

$file_name = "url_qrcode.png";

// Generate QR code for URL
QRcode::png($url, $file_name, QR_ECLEVEL_L, 10);

echo "QR Code for URL $url is saved as $file_name";
} while ($_GET['url'] == "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="./url_qrcode.png" alt="" srcset="">
    <form action="mll.php" method="get">
        <input type="text" name="url">
        <button type="submit">Generate</button>
    </form>
</body>
</html>