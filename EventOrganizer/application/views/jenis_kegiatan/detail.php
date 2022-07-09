<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jenis Kegiatan</title>
</head>
<body>
<div class="col-md-12">
 <h3>
 Detail Jenis Kegiatan
 </h3>
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
 <th>ID</th>
<th>Nama</th>
</tr>
 </thead>
 <tbody>
 <tr>
 <td> <?= $jenis_kegiatan -> id ?></td>
 <td> <?= $jenis_kegiatan -> nama ?></td>
 </tr>
 </tbody>
 </table>
 <div class="col-md-5 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="<?=base_url()?>uploads/photos/<?=$jenis_kegiatan->id?>.jpg" width="300"/>
                <div class="mt-4">
                    <h4><?=$jenis_kegiatan->nama?></h4>
                    <p>Foto Jenis Kegiatan</p>
</br> </br>
                    <a href="https://www.instagram.com/sitisaadatulfitri_/" target="_blank"><button class="btn btn-outline-info">instagram</button></a>
</br> </br>
                    <?php echo form_open_multipart('jenis_kegiatan/upload');?>
                    <input type="file" name="foto" size="300"/>
                    <input type="hidden" name="idjenis_kegiatan" value="<?=$jenis_kegiatan->id?>"/>
</br> </br>
                    <input type="submit" value="upload foto" class="btn btn-primary"/>
</form>
                </div>
            </div>
        </div>
    </div>
 </div>
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