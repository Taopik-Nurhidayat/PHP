<?php

$dataUmur = [
    "Agus" => "20",
    "Septi" => "25",
    "Rudi" => "18"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Data</title>
</head>
<body>
    <h2>Data Umur</h2>
  <?php
  foreach ($dataUmur as $nama => $umur) {
      echo "$nama : $umur <br> " ;
  }
?>
<br>
<h2>Data Umur setelah di urutkan</h2>
<?php
ksort($dataUmur);
foreach ($dataUmur as $nama => $umur) {
    echo "$nama : $umur <br>";
}
?>
</body>
</html>