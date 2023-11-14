<?php
session_start();
include 'connection.php';
require_once 'qrlib.php';
require_once 'connection.php';

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    $name = $url . '-qrcode';

    $ext = pathinfo($url, PATHINFO_EXTENSION);

    if (in_array(strtolower($ext), array('jpg', 'jpeg', 'gif', 'png'))) {
        $file_name = './qrimages/' . $name . '.png';
    } else {
        $file_name = './qrimages/' . $name . '.png';
    }

    QRcode::png($url, $file_name, QR_ECLEVEL_L, 10);
    $stmt = $pdo->prepare("INSERT INTO userdata (qrcode) VALUES (?)");
    $stmt->execute([$file_name]);

    $stmt = $pdo->prepare("SELECT qrcode FROM userdata WHERE id = ?");
    $stmt->execute([$pdo->lastInsertId()]);
    $qrcodeimg = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<div class="qrdownload">';
    echo '<p class="join__description">';
    if (!empty($url)) {
        echo 'Your QRCode for <strong>' . $url . '</strong> is ready for download!';
    } else {
        echo "Type text to generate your QR Code";
    }
    echo '</p>';
    echo '<div class="result" id="display">';
    echo '<img src="' . $qrcodeimg['qrcode'] . '" alt="" class="qrcode__image" style="margin-top: .5rem;">';
    echo '</div>';
    echo '<form action="./download.php" method="post">';
    if (!empty($url)) {
        echo '<button class="button join__button" type="submit" >Download <i class="uil uil-download-alt"></i></button>';
    }
    echo '</form>';
    echo '</div>';
}
?>
