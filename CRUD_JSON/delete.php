<?php


//tangkap data dari index.php
$index = $_GET["index"];

//buka file jsonnya
$getFileJSON = file_get_contents("kontak.json");

//ubah file kedalam array
$dataKontak = json_decode($getFileJSON);

//hapus data dari array
unset($dataKontak[$index]);

//kembalikan lagi kefile json
    $data = json_encode(array_values($dataKontak), JSON_PRETTY_PRINT);
    file_put_contents("kontak.json", $data);

    //balikan ke index.php
    header("Location: index.php");


?>
