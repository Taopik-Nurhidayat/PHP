<?php

//buka file json
$getFileJSON = file_get_contents("data.json");

//ubah file json ke array (decode)
$dataKontak = json_decode($getFileJSON);

$index = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data kontak</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <nav class="navbar">
    <div class="logo">JUNIOR WEB PROGRAMMING</div>
    <ul class="nav-links">
      <li><button class="btn"><a href="index.php">Form Input</a></button></li>
      <li><button class="btn"><a href="tabel.php">Data Kontak</a></button></li>
    </ul>
  </nav>
<div class="main">
<h1>DATA KONTAK</h1>
<table border="" cellpadding="15px" class="tabel" align="center">
<tr class="judul">
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
</tr>
<?php foreach($dataKontak as $kontak) : ?>
    <tr class="isi">
<td><?php echo $index + 1 ?></td>
<td><?php echo $kontak->nama;?></td>
<td><?php echo $kontak->email;?></td>
    </tr>
<?php $index++; endforeach;?>
</table>
</div>
</body>
</html>