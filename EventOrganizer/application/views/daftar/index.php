<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    </script>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar/index')?>">Daftar</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Daftar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h3><center>Daftar</center></h3>
    <br>
    <table border="1"  class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>tanggal_daftar</th>
                <th>alasan</th>
                <th>users_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($daftar as $dftr){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dftr -> tanggal_daftar ?></td>
                <td><?php echo $dftr -> alasan ?></td>
                <td><?php echo $dftr -> users_id ?></td>
                <td>
                <a href="<?php echo base_url("index.php/daftar/detail/$dftr->id") ?>" 
                class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/daftar/edit/$dftr->id") ?> 
                class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/daftar/delete/$dftr->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
                onclick=" return hapusDaftar('Anda Yakin ingin menghapus daftar pada tanggal <?php echo $dftr->tanggal_daftar ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?=base_url()?>index.php/daftar/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
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