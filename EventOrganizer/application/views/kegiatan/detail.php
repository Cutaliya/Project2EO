<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Kegiatan</h3>
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
            <tr>
                <td> <?= $kgtn -> id ?></td>
                <td><?= $kgtn ->  judul ?></td>
                <td><?= $kgtn -> kapasitas ?></td>
                <td><?= $kgtn -> harga_tiket ?></td>
                <td><?= $kgtn -> tanggal ?></td>
                <td><?= $kgtn -> tema ?></td>
                <td><?= $kgtn -> tempat ?></td>
                <td><?= $kgtn -> pic ?></td>
                <td><?= $kgtn -> foto_lukisan ?></td>
                <td><?= $kgtn-> jenis_id ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-sm-4">

<img src="<?=base_url()?>uploads/photos/<?=$kgtn->id?>.jpg" class="" width="300"/>
Nama Kegiatan : <?= $kegiatan->foto1?>
    <br>
  <?php
  echo form_open_multipart('kegiatan/upload');
  ?>
  <input type="hidden" name="id" value="<?=$kgtn->id?>"/>
  <input type="file" name="fotolks" size="20"/>
<hr>
  <input type="submit" class="btn btn-primary" value="upload" />
</form>
</div>
    <!-- <div class="col-md-5 mb-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <img src="<?=base_url()?>uploads/photos/<?=$kgtn->id?>.jpg" width="500"/>
            <div class="mt-4">
                <h4><?=$kgtn->tema?></h4>
                <p>Foto Kegiatan</p>
                <br/> <br/>
                <a href="https://www.instagram.com/malikaanurfikria_/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                <br/> <br/>
                <?php echo form_open_multipart('kegiatan/upload');?>
                <input type="file" name="foto" size="600"/>
                <input type="hidden" name="idkegiatan" value="<?=$kgtn->id?>"/>
                <br/> <br/>
                <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div> -->
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
