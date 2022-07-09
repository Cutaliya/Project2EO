<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Daftar</title>
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
    <h3>Detail Daftar</h3>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
    <!-- Main content -->
    <section class="content">

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
    <table border="1"  class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>tanggal_daftar</th>
                <th>alasan</th>
                <th>users_id</th>
                <th>kegiatan_id</th>
                <th>kategori_peserta_id</th>
                <th>nosertifikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $daftar -> id ?></td>
                <td> <?php echo $daftar -> tanggal_daftar ?></td>
                <td> <?php echo $daftar -> alasan ?></td>
                <td> <?php echo $daftar -> users_id ?></td>
                <td> <?php echo $daftar -> kegiatan_id ?></td>
                <td> <?php echo $daftar -> kategori_peserta_id ?></td>
                <td> <?php echo $daftar -> nosertifikat ?></td>
                </tr>
                </tbody>
                </table>
                <!-- <div class="col-md-5 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="<?=base_url()?>upload/photosDaftar/<?=$daftar->id?>.jpg" width="500"/>
                                <div class="mt-4">
                                    <h4><?=$daftar->tanggal_daftar?></h4>
                                    <p>Foto Daftar</p>
                                    <br/> 
                                    <a href="https://www.instagram.com/cutaliya_01/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                                    <?php echo form_open_multipart('daftar/upload');?>
                                    <input type="file" name="foto" size="500"/>
                                    <input type="hidden" name="iddaftar" value="<?=$daftar->id?>"/>
                                    <br>
                                    <input type="submit" value="Upload Foto" class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
            </div>
        </div>    -->
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