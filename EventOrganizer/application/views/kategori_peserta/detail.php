<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori Peserta</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Kategori Peserta</h3>
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
                <th>Id</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?= $kategori_peserta -> id ?></td>
                <td><?= $kategori_peserta ->  nama?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <img src="<?=base_url()?>upload/photos/<?=$kategori_peserta->id?>.jpg" width="200"/>
            <div class="mt-4">
                <h4><?=$kategori_peserta->nama?></h4>
                <p>Foto Kategori Peserta</p>
                <br/> <br/>
                <a href="https://www.instagram.com/malikaanurfikria_/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                <br/> <br/>
                <?php echo form_open_multipart('kategori_peserta/upload');?>
                <input type="file" name="foto" size="200"/>
                <input type="hidden" name="idkategoripeserta" value="<?=$kategori_peserta->id?>"/>
                <br/> <br/>
                <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                </div>
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
