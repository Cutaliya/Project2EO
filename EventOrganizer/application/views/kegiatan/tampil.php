<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEGIATAN PAMERAN LUKISAN</title>
    <script>
function hapusKegiatan(pesan){
    if (confirm(pesan)){
        return true;
    }
    else{
        return false;
    }
}
</script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
    <div class="col-md-12">
    <h3>KEGIATAN PAMERAN LUKISAN</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Kapasitas</th>
                <th>Harga Tiket</th>
                <th>Tanggal</th>
                <th>Tema</th>
                <th>Tempat</th>
                <th>Pic</th>
                <th>Foto Lukisan</th>
                <th>Jenis Id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($kegiatan as $kgtn) {
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $kgtn -> id ?></td>
                <td><?= $kgtn -> judul ?></td>
                <td><?= $kgtn -> kapasitas ?></td>
                <td><?= $kgtn -> harga_tiket ?></td>
                <td><?= $kgtn -> tanggal ?></td>
                <td><?= $kgtn -> tema ?></td>
                <td><?= $kgtn -> tempat ?></td>
                <td><?= $kgtn -> pic ?></td>
                <td> <img src="<?php echo base_url("uploads/$kgtn->foto_lukisan"); ?>" alt="" class="d-block">
                <br>
                Nama File : <?=$kegiatan->tema?>
                <?php echo form_open_multipart('kegiatan/upload');?>
                <input type="hidden" name="id_kegiatan" value="<?=$kegiatan->id ?>">
                <input type="hidden" name="tema" value="<?=$kegiatan->tema ?>">
                <input type="file" name="fotolks"/>
                <input type="submit" class="btn btn-success" value="upload"/>
                <?php echo form_close()?></td></td>
                <td><?= $kgtn -> jenis_id ?></td>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
   
</div>
</body>
</html>