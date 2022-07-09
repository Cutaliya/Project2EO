<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Peserta</title>
</head>
<script>
function hapusJenis_kegiatan(pesan){
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
<body>
<div class="col-md-12">
 <h4 style="text-align: center;">Kategori Peserta</h4>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper pt-4">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kategori Peserta</h3>

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
    <th>ID</th>
    <th>Nama</th>
    <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($kategori_peserta as $kaserta){
 ?>
 <tr>
    <td><?php echo $nomor ?></td>
    <td><?php echo $kaserta -> nama ?></td>
    <td>
    <a href="<?php echo base_url("index.php/kategori_peserta/detail/$kaserta->id") ?>" 
                class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/kategori_peserta/edit/$kaserta->id") ?> 
                class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/kategori_peserta/delete/$kaserta->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
                onclick=" return hapusKategori_peserta('Anda Yakin ingin menghapus daftar ini <?php echo $kaserta->nama ?>?')">Hapus</a>
                
</td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
 &nbsp;
 <a href="<?php echo base_url("index.php/kategori_peserta/form") ?>" class="btn btn-primary btn-lg active" >Tambah</a>
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
</html