<?php

//buka file json
$getFileJSON = file_get_contents("data.json");

//ubah file json ke array (decode)
$dataMhs = json_decode($getFileJSON);

$index = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
         <nav>
        <ul>
            <li><a href="index.php">Form Input</a></li>
            <li><a href="output.php">Data Mahasiswa</a></li>
        </ul>
    </nav>
<div class="main">
<h1>DATA MAHASISWA</h1>
<table border="" cellpadding="15px" class="tabel" align="center">
<tr class="judul">
    <th>No</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Email</th>

</tr>
<?php foreach($dataMhs as $mhs) : ?>
    <tr class="isi">
<td><?php echo $index + 1 ?></td>
<td><?php echo $mhs->nim;?></td>
<td><?php echo $mhs->nama;?></td>
<td><?php echo $mhs->email;?></td>
    </tr>
<?php $index++; endforeach;?>
</table>
</div>
</body>
</html>