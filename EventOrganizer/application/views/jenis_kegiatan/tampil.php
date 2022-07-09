<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kegiatan</title>
</head>
<body>
<div class="col-md-12">
 <h4 style="text-align: center;">Jenis Kegiatan</h4>
 <table border="1" class="table">
 <thead>
 <tr>
    <th>ID</th>
    <th>Nama</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($jenis_kegiatan as $jenis_kegiatan){
 ?>
 <tr>
 <td> <?= $jenis_kegiatan -> id ?></td>
 <td> <?= $jenis_kegiatan -> nama ?></td>
 
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>
</body>
</html