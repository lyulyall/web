<?php
require_once 'db.php';

if (isset($_POST['export']))
{
    $filename = '\trains_exported.xml';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://localhost/LR5/bd/trains.xml');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);

    $fileKey = 'C:\install\XAMPP\htdocs\LR5\bd\export';
    $localFile = $fileKey;
    $localFile .= $filename;

    $fp = fopen($localFile, 'w');
    $content = curl_exec($curl);
    fwrite($fp, $content);
    curl_close($curl);
    fclose($fp);
    $msg = "Файл trains_exported.xml успешно загружен в папку $fileKey";
}
?>

