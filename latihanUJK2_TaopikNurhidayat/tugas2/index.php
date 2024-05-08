<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Data</title>
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
    <div class="card" align="center" cellpadding="5px">
   <form action="" method="post">
<table cellpadding="6px" class="tbl">
<tr>
    <td><label for="nama">Nama </label></td>
    <td>:  <input type="nama" id="nama" name="nama" required class="form"></td>
</tr>
<tr>
    <td><label for="email">Email</label></td>
    <td>:  <input type="email" id="email" name="email" required class="form"></td>
</tr>
<tr>
    <td colspan="2" class="sum" align="right">
        <button type="submit" name="submit" class="sum">Kirim</button>
    </td>
</tr>
</table>

   </form> 
</div>

   <?php 

if(isset($_POST["submit"])){
    $getFileJSON = file_get_contents("data.json");
    $dataKontak = json_decode($getFileJSON,);
       $kontak = [
           "nama" => $_POST["nama"],
           "email" => $_POST["email"]
       ];

       $dataKontak[] = $kontak;

       $data = json_encode($dataKontak,JSON_PRETTY_PRINT);
       file_put_contents("data.json", $data);
       header("Location: tabel.php");
}
   ?>
</body>
</html>