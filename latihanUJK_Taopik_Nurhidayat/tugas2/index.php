<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Data</title>
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>
     <nav>
        <ul>
            <li><a href="index.php">Form Input</a></li>
            <li><a href="output.php">Data Mahasiswa</a></li>
        </ul>
    </nav>
    <div class="card" align="center" cellpadding="5px">
   <form action="" method="post">
<table cellpadding="6px" class="tbl">
<tr>
    <td><label for="nim">Nim </label></td>
    <td>:  <input type="text" id="nim" name="nim" required class="form"></td>
</tr>
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
    $dataMhs = json_decode($getFileJSON,);
       $mhs = [
           "nim" => $_POST["nim"],
           "nama" => $_POST["nama"],
           "email" => $_POST["email"]
       ];

       $dataMhs[] = $mhs;

       $data = json_encode($dataMhs,JSON_PRETTY_PRINT);
       file_put_contents("data.json", $data);
       header("Location: output.php");
}
   ?>
</body>
</html>