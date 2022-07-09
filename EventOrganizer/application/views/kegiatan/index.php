<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEGIATAN</title>
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
    <h3><center>Kegiatan Pameran Lukisan</center></h3>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kegiatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Harga Tiket</th>
                <th>Tanggal</th>
                <th>Tema</th>
                <th>Tempat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($kegiatan as $kgtn) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $kgtn -> judul ?></td>
                <td><?php echo $kgtn -> harga_tiket ?></td>
                <td><?php echo $kgtn -> tanggal ?></td>
                <td><?php echo $kgtn -> tema ?></td>
                <td><?php echo $kgtn -> tempat ?></td>
                <td>
    <a href="<?php echo base_url("index.php/kegiatan/detail/$kgtn->id") ?>" 
    class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/kegiatan/edit/$kgtn->id") ?> 
    class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/kegiatan/delete/$kgtn->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
    onclick=" return hapusKegiatan('Anda Yakin ingin menghapus kegiatan yang bertema <?php echo $kgtn->tema ?>?')">Hapus</a>
</td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?=base_url()?>index.php/kegiatan/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
</div>
<!-- /.card-body -->
<div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>