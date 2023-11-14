<?php
require_once 'qrlib.php';
require_once 'connection.php';


if (isset($_GET['url'])) {

   $url = $_GET['url'];
   $name = $url . '-qrcode';

   // extract the extension from the URL
   $ext = pathinfo($url, PATHINFO_EXTENSION);

   // check if the extension is an image format
   if (in_array(strtolower($ext), array('jpg', 'jpeg', 'gif', 'png'))) {
      // if the extension is an image format, use the original name as the file name
      $file_name = './qrimages/' . $name;
   } else {
      // if the extension is not an image format, add the .png extension
      $file_name = './qrimages/' . $name . '.png';
   }

   QRcode::png($url, $file_name, QR_ECLEVEL_L, 10);
   $stmt = $pdo->prepare("INSERT INTO userdata (qrcode) VALUES (?)");
   $stmt->execute([$file_name]);

   // select row with the last inserted id
   $stmt = $pdo->prepare("SELECT qrcode FROM userdata WHERE id = ?");
   $stmt->execute([$pdo->lastInsertId()]);
   $qrcodeimg = $stmt->fetch(PDO::FETCH_ASSOC);

}
 

?>